<?php
ini_set("display_errors","on");
include 'db_conn.php';

$stmt = $dbh->prepare("INSERT INTO backups (label,date,obs,longdata,update,user) VALUES ('$_GET[label]',now(),'$_GET[obs]','$_GET[longdata]','$_GET[update]','$_GET[user]')");
$stmt->execute();

// var_dump($stmt); //DEBUG

file_put_contents("backup.json",json_encode($_GET));
?>
