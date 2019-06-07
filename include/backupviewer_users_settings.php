<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabackupviewer_users = array();
	$tdatabackupviewer_users[".truncateText"] = true;
	$tdatabackupviewer_users[".NumberOfChars"] = 80;
	$tdatabackupviewer_users[".ShortName"] = "backupviewer_users";
	$tdatabackupviewer_users[".OwnerID"] = "";
	$tdatabackupviewer_users[".OriginalTable"] = "backupviewer_users";

//	field labels
$fieldLabelsbackupviewer_users = array();
$fieldToolTipsbackupviewer_users = array();
$pageTitlesbackupviewer_users = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"] = array();
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"] = array();
	$pageTitlesbackupviewer_users["Portuguese(Brazil)"] = array();
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["ID"] = "ID";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["ID"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["username"] = "Username";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["username"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["password"] = "Password";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["password"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["email"] = "Email";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["email"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["fullname"] = "Fullname";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["fullname"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["groupid"] = "Groupid";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["groupid"] = "";
	$fieldLabelsbackupviewer_users["Portuguese(Brazil)"]["active"] = "Active";
	$fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]["active"] = "";
	if (count($fieldToolTipsbackupviewer_users["Portuguese(Brazil)"]))
		$tdatabackupviewer_users[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbackupviewer_users[""] = array();
	$fieldToolTipsbackupviewer_users[""] = array();
	$pageTitlesbackupviewer_users[""] = array();
	$fieldLabelsbackupviewer_users[""]["ID"] = "ID";
	$fieldToolTipsbackupviewer_users[""]["ID"] = "";
	$fieldLabelsbackupviewer_users[""]["username"] = "Username";
	$fieldToolTipsbackupviewer_users[""]["username"] = "";
	$fieldLabelsbackupviewer_users[""]["password"] = "Password";
	$fieldToolTipsbackupviewer_users[""]["password"] = "";
	$fieldLabelsbackupviewer_users[""]["email"] = "Email";
	$fieldToolTipsbackupviewer_users[""]["email"] = "";
	$fieldLabelsbackupviewer_users[""]["fullname"] = "Fullname";
	$fieldToolTipsbackupviewer_users[""]["fullname"] = "";
	$fieldLabelsbackupviewer_users[""]["groupid"] = "Groupid";
	$fieldToolTipsbackupviewer_users[""]["groupid"] = "";
	$fieldLabelsbackupviewer_users[""]["active"] = "Active";
	$fieldToolTipsbackupviewer_users[""]["active"] = "";
	if (count($fieldToolTipsbackupviewer_users[""]))
		$tdatabackupviewer_users[".isUseToolTips"] = true;
}


	$tdatabackupviewer_users[".NCSearch"] = true;



$tdatabackupviewer_users[".shortTableName"] = "backupviewer_users";
$tdatabackupviewer_users[".nSecOptions"] = 0;
$tdatabackupviewer_users[".recsPerRowList"] = 1;
$tdatabackupviewer_users[".recsPerRowPrint"] = 1;
$tdatabackupviewer_users[".mainTableOwnerID"] = "";
$tdatabackupviewer_users[".moveNext"] = 1;
$tdatabackupviewer_users[".entityType"] = 0;

$tdatabackupviewer_users[".strOriginalTableName"] = "backupviewer_users";





$tdatabackupviewer_users[".showAddInPopup"] = false;

$tdatabackupviewer_users[".showEditInPopup"] = false;

$tdatabackupviewer_users[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabackupviewer_users[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabackupviewer_users[".fieldsForRegister"] = array();

$tdatabackupviewer_users[".listAjax"] = false;

	$tdatabackupviewer_users[".audit"] = false;

	$tdatabackupviewer_users[".locking"] = false;









$tdatabackupviewer_users[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabackupviewer_users[".searchSaving"] = false;
//

$tdatabackupviewer_users[".showSearchPanel"] = true;
		$tdatabackupviewer_users[".flexibleSearch"] = true;

if (isMobile())
	$tdatabackupviewer_users[".isUseAjaxSuggest"] = false;
else
	$tdatabackupviewer_users[".isUseAjaxSuggest"] = true;

$tdatabackupviewer_users[".rowHighlite"] = true;



$tdatabackupviewer_users[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabackupviewer_users[".isUseTimeForSearch"] = false;



$tdatabackupviewer_users[".badgeColor"] = "CD5C5C";


$tdatabackupviewer_users[".allSearchFields"] = array();
$tdatabackupviewer_users[".filterFields"] = array();
$tdatabackupviewer_users[".requiredSearchFields"] = array();

$tdatabackupviewer_users[".allSearchFields"][] = "ID";
	$tdatabackupviewer_users[".allSearchFields"][] = "username";
	$tdatabackupviewer_users[".allSearchFields"][] = "password";
	$tdatabackupviewer_users[".allSearchFields"][] = "email";
	$tdatabackupviewer_users[".allSearchFields"][] = "fullname";
	$tdatabackupviewer_users[".allSearchFields"][] = "groupid";
	$tdatabackupviewer_users[".allSearchFields"][] = "active";
	

$tdatabackupviewer_users[".googleLikeFields"] = array();
$tdatabackupviewer_users[".googleLikeFields"][] = "ID";
$tdatabackupviewer_users[".googleLikeFields"][] = "username";
$tdatabackupviewer_users[".googleLikeFields"][] = "password";
$tdatabackupviewer_users[".googleLikeFields"][] = "email";
$tdatabackupviewer_users[".googleLikeFields"][] = "fullname";
$tdatabackupviewer_users[".googleLikeFields"][] = "groupid";
$tdatabackupviewer_users[".googleLikeFields"][] = "active";


$tdatabackupviewer_users[".advSearchFields"] = array();
$tdatabackupviewer_users[".advSearchFields"][] = "ID";
$tdatabackupviewer_users[".advSearchFields"][] = "username";
$tdatabackupviewer_users[".advSearchFields"][] = "password";
$tdatabackupviewer_users[".advSearchFields"][] = "email";
$tdatabackupviewer_users[".advSearchFields"][] = "fullname";
$tdatabackupviewer_users[".advSearchFields"][] = "groupid";
$tdatabackupviewer_users[".advSearchFields"][] = "active";

$tdatabackupviewer_users[".tableType"] = "list";

$tdatabackupviewer_users[".printerPageOrientation"] = 0;
$tdatabackupviewer_users[".nPrinterPageScale"] = 100;

$tdatabackupviewer_users[".nPrinterSplitRecords"] = 40;

$tdatabackupviewer_users[".nPrinterPDFSplitRecords"] = 40;



$tdatabackupviewer_users[".geocodingEnabled"] = false;





$tdatabackupviewer_users[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabackupviewer_users[".pageSize"] = 20;

$tdatabackupviewer_users[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabackupviewer_users[".strOrderBy"] = $tstrOrderBy;

$tdatabackupviewer_users[".orderindexes"] = array();

$tdatabackupviewer_users[".sqlHead"] = "SELECT ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$tdatabackupviewer_users[".sqlFrom"] = "FROM backupviewer_users";
$tdatabackupviewer_users[".sqlWhereExpr"] = "";
$tdatabackupviewer_users[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabackupviewer_users[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabackupviewer_users[".arrGroupsPerPage"] = $arrGPP;

$tdatabackupviewer_users[".highlightSearchResults"] = true;

$tableKeysbackupviewer_users = array();
$tableKeysbackupviewer_users[] = "ID";
$tdatabackupviewer_users[".Keys"] = $tableKeysbackupviewer_users;

$tdatabackupviewer_users[".listFields"] = array();
$tdatabackupviewer_users[".listFields"][] = "ID";
$tdatabackupviewer_users[".listFields"][] = "username";
$tdatabackupviewer_users[".listFields"][] = "password";
$tdatabackupviewer_users[".listFields"][] = "email";
$tdatabackupviewer_users[".listFields"][] = "fullname";
$tdatabackupviewer_users[".listFields"][] = "groupid";
$tdatabackupviewer_users[".listFields"][] = "active";

$tdatabackupviewer_users[".hideMobileList"] = array();


$tdatabackupviewer_users[".viewFields"] = array();
$tdatabackupviewer_users[".viewFields"][] = "ID";
$tdatabackupviewer_users[".viewFields"][] = "username";
$tdatabackupviewer_users[".viewFields"][] = "password";
$tdatabackupviewer_users[".viewFields"][] = "email";
$tdatabackupviewer_users[".viewFields"][] = "fullname";
$tdatabackupviewer_users[".viewFields"][] = "groupid";
$tdatabackupviewer_users[".viewFields"][] = "active";

$tdatabackupviewer_users[".addFields"] = array();
$tdatabackupviewer_users[".addFields"][] = "username";
$tdatabackupviewer_users[".addFields"][] = "password";
$tdatabackupviewer_users[".addFields"][] = "email";
$tdatabackupviewer_users[".addFields"][] = "fullname";
$tdatabackupviewer_users[".addFields"][] = "groupid";
$tdatabackupviewer_users[".addFields"][] = "active";

$tdatabackupviewer_users[".masterListFields"] = array();
$tdatabackupviewer_users[".masterListFields"][] = "ID";
$tdatabackupviewer_users[".masterListFields"][] = "username";
$tdatabackupviewer_users[".masterListFields"][] = "password";
$tdatabackupviewer_users[".masterListFields"][] = "email";
$tdatabackupviewer_users[".masterListFields"][] = "fullname";
$tdatabackupviewer_users[".masterListFields"][] = "groupid";
$tdatabackupviewer_users[".masterListFields"][] = "active";

$tdatabackupviewer_users[".inlineAddFields"] = array();
$tdatabackupviewer_users[".inlineAddFields"][] = "username";
$tdatabackupviewer_users[".inlineAddFields"][] = "password";
$tdatabackupviewer_users[".inlineAddFields"][] = "email";
$tdatabackupviewer_users[".inlineAddFields"][] = "fullname";
$tdatabackupviewer_users[".inlineAddFields"][] = "groupid";
$tdatabackupviewer_users[".inlineAddFields"][] = "active";

$tdatabackupviewer_users[".editFields"] = array();
$tdatabackupviewer_users[".editFields"][] = "username";
$tdatabackupviewer_users[".editFields"][] = "password";
$tdatabackupviewer_users[".editFields"][] = "email";
$tdatabackupviewer_users[".editFields"][] = "fullname";
$tdatabackupviewer_users[".editFields"][] = "groupid";
$tdatabackupviewer_users[".editFields"][] = "active";

$tdatabackupviewer_users[".inlineEditFields"] = array();
$tdatabackupviewer_users[".inlineEditFields"][] = "username";
$tdatabackupviewer_users[".inlineEditFields"][] = "password";
$tdatabackupviewer_users[".inlineEditFields"][] = "email";
$tdatabackupviewer_users[".inlineEditFields"][] = "fullname";
$tdatabackupviewer_users[".inlineEditFields"][] = "groupid";
$tdatabackupviewer_users[".inlineEditFields"][] = "active";

$tdatabackupviewer_users[".exportFields"] = array();
$tdatabackupviewer_users[".exportFields"][] = "ID";
$tdatabackupviewer_users[".exportFields"][] = "username";
$tdatabackupviewer_users[".exportFields"][] = "password";
$tdatabackupviewer_users[".exportFields"][] = "email";
$tdatabackupviewer_users[".exportFields"][] = "fullname";
$tdatabackupviewer_users[".exportFields"][] = "groupid";
$tdatabackupviewer_users[".exportFields"][] = "active";

$tdatabackupviewer_users[".importFields"] = array();
$tdatabackupviewer_users[".importFields"][] = "ID";
$tdatabackupviewer_users[".importFields"][] = "username";
$tdatabackupviewer_users[".importFields"][] = "password";
$tdatabackupviewer_users[".importFields"][] = "email";
$tdatabackupviewer_users[".importFields"][] = "fullname";
$tdatabackupviewer_users[".importFields"][] = "groupid";
$tdatabackupviewer_users[".importFields"][] = "active";

$tdatabackupviewer_users[".printFields"] = array();
$tdatabackupviewer_users[".printFields"][] = "ID";
$tdatabackupviewer_users[".printFields"][] = "username";
$tdatabackupviewer_users[".printFields"][] = "password";
$tdatabackupviewer_users[".printFields"][] = "email";
$tdatabackupviewer_users[".printFields"][] = "fullname";
$tdatabackupviewer_users[".printFields"][] = "groupid";
$tdatabackupviewer_users[".printFields"][] = "active";

//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","ID");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["ID"] = $fdata;
//	username
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "username";
	$fdata["GoodName"] = "username";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","username");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "username";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "username";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["username"] = $fdata;
//	password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "password";
	$fdata["GoodName"] = "password";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","password");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "password";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Password");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["password"] = $fdata;
//	email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "email";
	$fdata["GoodName"] = "email";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","email");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "email";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "email";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["email"] = $fdata;
//	fullname
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "fullname";
	$fdata["GoodName"] = "fullname";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","fullname");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "fullname";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "fullname";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["fullname"] = $fdata;
//	groupid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "groupid";
	$fdata["GoodName"] = "groupid";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","groupid");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "groupid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "groupid";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=255";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["groupid"] = $fdata;
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "backupviewer_users";
	$fdata["Label"] = GetFieldLabel("backupviewer_users","active");
	$fdata["FieldType"] = 3;

	
	
	
	
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackupviewer_users["active"] = $fdata;


$tables_data["backupviewer_users"]=&$tdatabackupviewer_users;
$field_labels["backupviewer_users"] = &$fieldLabelsbackupviewer_users;
$fieldToolTips["backupviewer_users"] = &$fieldToolTipsbackupviewer_users;
$page_titles["backupviewer_users"] = &$pageTitlesbackupviewer_users;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["backupviewer_users"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["backupviewer_users"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_backupviewer_users()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	username,  	password,  	email,  	fullname,  	groupid,  	active";
$proto0["m_strFrom"] = "FROM backupviewer_users";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "ID",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "backupviewer_users";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "username",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto8["m_sql"] = "username";
$proto8["m_srcTableName"] = "backupviewer_users";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "password",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto10["m_sql"] = "password";
$proto10["m_srcTableName"] = "backupviewer_users";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "email",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto12["m_sql"] = "email";
$proto12["m_srcTableName"] = "backupviewer_users";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "fullname",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto14["m_sql"] = "fullname";
$proto14["m_srcTableName"] = "backupviewer_users";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "groupid",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto16["m_sql"] = "groupid";
$proto16["m_srcTableName"] = "backupviewer_users";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "backupviewer_users",
	"m_srcTableName" => "backupviewer_users"
));

$proto18["m_sql"] = "active";
$proto18["m_srcTableName"] = "backupviewer_users";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "backupviewer_users";
$proto21["m_srcTableName"] = "backupviewer_users";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "ID";
$proto21["m_columns"][] = "username";
$proto21["m_columns"][] = "password";
$proto21["m_columns"][] = "email";
$proto21["m_columns"][] = "fullname";
$proto21["m_columns"][] = "groupid";
$proto21["m_columns"][] = "active";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "backupviewer_users";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "backupviewer_users";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="backupviewer_users";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_backupviewer_users = createSqlQuery_backupviewer_users();


	
		;

							

$tdatabackupviewer_users[".sqlquery"] = $queryData_backupviewer_users;

$tableEvents["backupviewer_users"] = new eventsBase;
$tdatabackupviewer_users[".hasEvents"] = false;

?>