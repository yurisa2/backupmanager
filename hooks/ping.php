<?php
include 'db_conn.php';




$stmt = $pdo->prepare("INSERT INTO pings (date,obs,user) VALUES(now(),$_GET[action],$_GET[user])");
$stmt->execute();

file_put_contents("ping.json",json_encode($_GET));



?>
