<?php
$dalTablepings = array();
$dalTablepings["id_ping"] = array("type"=>3,"varname"=>"id_ping");
$dalTablepings["date"] = array("type"=>135,"varname"=>"date");
$dalTablepings["obs"] = array("type"=>201,"varname"=>"obs");
$dalTablepings["user"] = array("type"=>200,"varname"=>"user");
	$dalTablepings["id_ping"]["key"]=true;

$dal_info["backup_db__pings"] = &$dalTablepings;
?>