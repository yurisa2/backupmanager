<?php
ini_set("display_errors","on");
include 'db_conn.php';
include 'mailtemplate.php';

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

  
$ret_mail = mail($_GET["email"], $mail_subject, corpo_mail($_GET["label"]), $header);
// var_dump($ret_mail); //DEBUG

file_put_contents("mail-".$_GET["email"]."-".time().".json",json_encode($ret_mail));

}

// var_dump($stmt); //DEBUG

file_put_contents("backup.json",json_encode($_GET));
?>
