<?php
ini_set("display_errors","on");

include 'db_conn.php';




$stmt = $dbh->prepare("INSERT INTO pings (date,obs,user) VALUES (now(),'$_GET[action]','$_GET[user]')");
$stmt->execute();


var_dump($stmt);

file_put_contents("ping.json",json_encode($_GET));



?>
