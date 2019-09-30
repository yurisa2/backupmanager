<?php
ini_set("display_errors","on");
include 'config.php';
include 'db_conn.php';
include 'mailtemplate.php';
include 'vendor/autoload.php';


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;


$stmt = $dbh->prepare("INSERT INTO backups (label,date,obs,longdata,`update`,user) VALUES ('$_GET[label]',now(),'$_GET[obs]','$_GET[longdata]','$_GET[update]','$_GET[user]')");
$stmt->execute();

if(isset($_GET["email"])) {
      $encoding = "utf-8";
      $from_name = "Backups Sa2";
      $from_mail = "backups@sa2.com.br";
      $mail_subject = "Backup " . $_GET["label"] . " executado.";

      $subject_preferences = array(
    "input-charset" => $encoding,
    "output-charset" => $encoding,
    "line-length" => 76,
    "line-break-chars" => "\r\n"
);


  $header = "Content-type: text/html; charset=".$encoding." \r\n";
    $header .= "From: ".$from_name." <".$from_mail."> \r\n";
    $header .= "MIME-Version: 1.0 \r\n";
    $header .= "Content-Transfer-Encoding: 8bit \r\n";
    $header .= "Date: ".date("r (T)")." \r\n";
    $header .= iconv_mime_encode("Subject", $mail_subject, $subject_preferences);


$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
$mail->Host = SMTP_SERVER;
$mail->Port = SMTP_PORT;
$mail->SMTPAuth = true;
$mail->Username = SMTP_USER;
$mail->Password = SMTP_PASS;
$mail->setFrom($from_mail, $from_name);
$mail->addReplyTo($from_mail, $from_name);
$mail->addAddress($_GET["email"], $_GET["email"]);
$mail->Subject = $mail_subject;
$mail->msgHTML(corpo_mail($_GET["label"]));
$mail->send();

$ret_mail = mail($_GET["email"], $mail_subject, corpo_mail($_GET["label"]), $header);
// mail("yuri@sa2.com.br", $mail_subject, corpo_mail($_GET["label"]), $header);
// var_dump($ret_mail); //DEBUG

file_put_contents("mail-".$_GET["email"]."-".time().".json",json_encode($ret_mail));

}

// var_dump($stmt); //DEBUG

file_put_contents("backup.json",json_encode($_GET));
?>
