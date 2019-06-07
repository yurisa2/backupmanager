<?php
$dalTablebackupviewer_users = array();
$dalTablebackupviewer_users["ID"] = array("type"=>3,"varname"=>"ID");
$dalTablebackupviewer_users["username"] = array("type"=>200,"varname"=>"username");
$dalTablebackupviewer_users["password"] = array("type"=>200,"varname"=>"password");
$dalTablebackupviewer_users["email"] = array("type"=>200,"varname"=>"email");
$dalTablebackupviewer_users["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTablebackupviewer_users["groupid"] = array("type"=>200,"varname"=>"groupid");
$dalTablebackupviewer_users["active"] = array("type"=>3,"varname"=>"active");
	$dalTablebackupviewer_users["ID"]["key"]=true;

$dal_info["backup_db__backupviewer_users"] = &$dalTablebackupviewer_users;
?>