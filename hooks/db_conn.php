<?php
ini_set("display_errors","on");

$server = "backupmanager.mysql.dbaas.com.br";

$u = "backupmanager";
$p = "Fokalove99";

$dbh = new PDO("mysql:host=$server;dbname=$u", $u, $p);

?>