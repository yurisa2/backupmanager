<?php
ini_set("display_errors","on");
include 'db_conn.php';
include 'mailtemplate.php';

$stmt = $dbh->prepare("INSERT INTO backups (label,date,obs,longdata,`update`,user) VALUES ('$_GET[label]',now(),'$_GET[obs]','$_GET[longdata]','$_GET[update]','$_GET[user]')");
$stmt->execute();

if(isset($_GET["email"]) {
mail ($_GET["email"], "Backup " . $_GET["label"] . " feito.", corpo_mail($_GET["label"]));
}

var_dump($stmt); //DEBUG

file_put_contents("backup.json",json_encode($_GET));
?>
