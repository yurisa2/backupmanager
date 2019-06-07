<?php
$dalTablebackups = array();
$dalTablebackups["id_bkp"] = array("type"=>3,"varname"=>"id_bkp");
$dalTablebackups["label"] = array("type"=>200,"varname"=>"label");
$dalTablebackups["date"] = array("type"=>135,"varname"=>"date");
$dalTablebackups["obs"] = array("type"=>201,"varname"=>"obs");
$dalTablebackups["longdata"] = array("type"=>201,"varname"=>"longdata");
$dalTablebackups["update"] = array("type"=>135,"varname"=>"update");
$dalTablebackups["user"] = array("type"=>200,"varname"=>"user");
	$dalTablebackups["id_bkp"]["key"]=true;

$dal_info["backup_db__backups"] = &$dalTablebackups;
?>