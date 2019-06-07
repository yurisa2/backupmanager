<?php
require_once(getabspath("classes/cipherer.php"));




$tdatabackups = array();
	$tdatabackups[".truncateText"] = true;
	$tdatabackups[".NumberOfChars"] = 80;
	$tdatabackups[".ShortName"] = "backups";
	$tdatabackups[".OwnerID"] = "";
	$tdatabackups[".OriginalTable"] = "backups";

//	field labels
$fieldLabelsbackups = array();
$fieldToolTipsbackups = array();
$pageTitlesbackups = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelsbackups["Portuguese(Brazil)"] = array();
	$fieldToolTipsbackups["Portuguese(Brazil)"] = array();
	$pageTitlesbackups["Portuguese(Brazil)"] = array();
	$fieldLabelsbackups["Portuguese(Brazil)"]["id_bkp"] = "Id Bkp";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["id_bkp"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["label"] = "Label";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["label"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["date"] = "Date";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["date"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["obs"] = "Obs";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["obs"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["longdata"] = "Longdata";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["longdata"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["update"] = "Update";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["update"] = "";
	$fieldLabelsbackups["Portuguese(Brazil)"]["user"] = "User";
	$fieldToolTipsbackups["Portuguese(Brazil)"]["user"] = "";
	if (count($fieldToolTipsbackups["Portuguese(Brazil)"]))
		$tdatabackups[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsbackups[""] = array();
	$fieldToolTipsbackups[""] = array();
	$pageTitlesbackups[""] = array();
	$fieldLabelsbackups[""]["id_bkp"] = "Id Bkp";
	$fieldToolTipsbackups[""]["id_bkp"] = "";
	$fieldLabelsbackups[""]["label"] = "Label";
	$fieldToolTipsbackups[""]["label"] = "";
	$fieldLabelsbackups[""]["date"] = "Date";
	$fieldToolTipsbackups[""]["date"] = "";
	$fieldLabelsbackups[""]["obs"] = "Obs";
	$fieldToolTipsbackups[""]["obs"] = "";
	$fieldLabelsbackups[""]["longdata"] = "Longdata";
	$fieldToolTipsbackups[""]["longdata"] = "";
	$fieldLabelsbackups[""]["update"] = "Update";
	$fieldToolTipsbackups[""]["update"] = "";
	$fieldLabelsbackups[""]["user"] = "User";
	$fieldToolTipsbackups[""]["user"] = "";
	if (count($fieldToolTipsbackups[""]))
		$tdatabackups[".isUseToolTips"] = true;
}


	$tdatabackups[".NCSearch"] = true;



$tdatabackups[".shortTableName"] = "backups";
$tdatabackups[".nSecOptions"] = 0;
$tdatabackups[".recsPerRowList"] = 1;
$tdatabackups[".recsPerRowPrint"] = 1;
$tdatabackups[".mainTableOwnerID"] = "";
$tdatabackups[".moveNext"] = 1;
$tdatabackups[".entityType"] = 0;

$tdatabackups[".strOriginalTableName"] = "backups";





$tdatabackups[".showAddInPopup"] = false;

$tdatabackups[".showEditInPopup"] = false;

$tdatabackups[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatabackups[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatabackups[".fieldsForRegister"] = array();

$tdatabackups[".listAjax"] = false;

	$tdatabackups[".audit"] = false;

	$tdatabackups[".locking"] = false;



$tdatabackups[".list"] = true;

$tdatabackups[".inlineEdit"] = true;
$tdatabackups[".view"] = true;


$tdatabackups[".exportTo"] = true;

$tdatabackups[".printFriendly"] = true;


$tdatabackups[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatabackups[".searchSaving"] = false;
//

$tdatabackups[".showSearchPanel"] = true;
		$tdatabackups[".flexibleSearch"] = true;

if (isMobile())
	$tdatabackups[".isUseAjaxSuggest"] = false;
else
	$tdatabackups[".isUseAjaxSuggest"] = true;

$tdatabackups[".rowHighlite"] = true;



$tdatabackups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatabackups[".isUseTimeForSearch"] = false;



$tdatabackups[".badgeColor"] = "388E8E";


$tdatabackups[".allSearchFields"] = array();
$tdatabackups[".filterFields"] = array();
$tdatabackups[".requiredSearchFields"] = array();

$tdatabackups[".allSearchFields"][] = "label";
	$tdatabackups[".allSearchFields"][] = "date";
	$tdatabackups[".allSearchFields"][] = "obs";
	$tdatabackups[".allSearchFields"][] = "longdata";
	

$tdatabackups[".googleLikeFields"] = array();
$tdatabackups[".googleLikeFields"][] = "id_bkp";
$tdatabackups[".googleLikeFields"][] = "label";
$tdatabackups[".googleLikeFields"][] = "date";
$tdatabackups[".googleLikeFields"][] = "obs";
$tdatabackups[".googleLikeFields"][] = "longdata";
$tdatabackups[".googleLikeFields"][] = "update";
$tdatabackups[".googleLikeFields"][] = "user";


$tdatabackups[".advSearchFields"] = array();
$tdatabackups[".advSearchFields"][] = "id_bkp";
$tdatabackups[".advSearchFields"][] = "label";
$tdatabackups[".advSearchFields"][] = "date";
$tdatabackups[".advSearchFields"][] = "obs";
$tdatabackups[".advSearchFields"][] = "longdata";
$tdatabackups[".advSearchFields"][] = "update";
$tdatabackups[".advSearchFields"][] = "user";

$tdatabackups[".tableType"] = "list";

$tdatabackups[".printerPageOrientation"] = 0;
$tdatabackups[".nPrinterPageScale"] = 100;

$tdatabackups[".nPrinterSplitRecords"] = 40;

$tdatabackups[".nPrinterPDFSplitRecords"] = 40;



$tdatabackups[".geocodingEnabled"] = false;





$tdatabackups[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatabackups[".pageSize"] = 20;

$tdatabackups[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY `date` DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatabackups[".strOrderBy"] = $tstrOrderBy;

$tdatabackups[".orderindexes"] = array();
$tdatabackups[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "`date`");

$tdatabackups[".sqlHead"] = "SELECT id_bkp,  `label`,  `date`,  obs,  longdata,  `update`,  `user`";
$tdatabackups[".sqlFrom"] = "FROM backups";
$tdatabackups[".sqlWhereExpr"] = "";
$tdatabackups[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatabackups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatabackups[".arrGroupsPerPage"] = $arrGPP;

$tdatabackups[".highlightSearchResults"] = true;

$tableKeysbackups = array();
$tableKeysbackups[] = "id_bkp";
$tdatabackups[".Keys"] = $tableKeysbackups;

$tdatabackups[".listFields"] = array();
$tdatabackups[".listFields"][] = "label";
$tdatabackups[".listFields"][] = "date";
$tdatabackups[".listFields"][] = "obs";
$tdatabackups[".listFields"][] = "longdata";

$tdatabackups[".hideMobileList"] = array();


$tdatabackups[".viewFields"] = array();
$tdatabackups[".viewFields"][] = "label";
$tdatabackups[".viewFields"][] = "date";
$tdatabackups[".viewFields"][] = "obs";
$tdatabackups[".viewFields"][] = "longdata";

$tdatabackups[".addFields"] = array();

$tdatabackups[".masterListFields"] = array();
$tdatabackups[".masterListFields"][] = "id_bkp";
$tdatabackups[".masterListFields"][] = "label";
$tdatabackups[".masterListFields"][] = "date";
$tdatabackups[".masterListFields"][] = "obs";
$tdatabackups[".masterListFields"][] = "longdata";
$tdatabackups[".masterListFields"][] = "update";
$tdatabackups[".masterListFields"][] = "user";

$tdatabackups[".inlineAddFields"] = array();

$tdatabackups[".editFields"] = array();

$tdatabackups[".inlineEditFields"] = array();
$tdatabackups[".inlineEditFields"][] = "label";
$tdatabackups[".inlineEditFields"][] = "date";
$tdatabackups[".inlineEditFields"][] = "obs";
$tdatabackups[".inlineEditFields"][] = "longdata";

$tdatabackups[".exportFields"] = array();
$tdatabackups[".exportFields"][] = "label";
$tdatabackups[".exportFields"][] = "date";
$tdatabackups[".exportFields"][] = "obs";
$tdatabackups[".exportFields"][] = "longdata";

$tdatabackups[".importFields"] = array();

$tdatabackups[".printFields"] = array();
$tdatabackups[".printFields"][] = "label";
$tdatabackups[".printFields"][] = "date";
$tdatabackups[".printFields"][] = "obs";
$tdatabackups[".printFields"][] = "longdata";

//	id_bkp
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_bkp";
	$fdata["GoodName"] = "id_bkp";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","id_bkp");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id_bkp";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_bkp";

	
	
			
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








	$tdatabackups["id_bkp"] = $fdata;
//	label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "label";
	$fdata["GoodName"] = "label";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","label");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`label`";

	
	
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




	$tdatabackups["label"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","date");
	$fdata["FieldType"] = 135;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "date";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`date`";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Datetime");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatabackups["date"] = $fdata;
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","obs");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "obs";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "obs";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatabackups["obs"] = $fdata;
//	longdata
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "longdata";
	$fdata["GoodName"] = "longdata";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","longdata");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "longdata";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "longdata";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
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




	$tdatabackups["longdata"] = $fdata;
//	update
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "update";
	$fdata["GoodName"] = "update";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","update");
	$fdata["FieldType"] = 135;

	
	
	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "update";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`update`";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

		$edata["ShowTime"] = true;

	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatabackups["update"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "backups";
	$fdata["Label"] = GetFieldLabel("backups","user");
	$fdata["FieldType"] = 200;

	
	
	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
			
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








	$tdatabackups["user"] = $fdata;


$tables_data["backups"]=&$tdatabackups;
$field_labels["backups"] = &$fieldLabelsbackups;
$fieldToolTips["backups"] = &$fieldToolTipsbackups;
$page_titles["backups"] = &$pageTitlesbackups;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["backups"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["backups"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_backups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_bkp,  `label`,  `date`,  obs,  longdata,  `update`,  `user`";
$proto0["m_strFrom"] = "FROM backups";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY `date` DESC";
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
	"m_strName" => "id_bkp",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto6["m_sql"] = "id_bkp";
$proto6["m_srcTableName"] = "backups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "label",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto8["m_sql"] = "`label`";
$proto8["m_srcTableName"] = "backups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto10["m_sql"] = "`date`";
$proto10["m_srcTableName"] = "backups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto12["m_sql"] = "obs";
$proto12["m_srcTableName"] = "backups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "longdata",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto14["m_sql"] = "longdata";
$proto14["m_srcTableName"] = "backups";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "update",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto16["m_sql"] = "`update`";
$proto16["m_srcTableName"] = "backups";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto18["m_sql"] = "`user`";
$proto18["m_srcTableName"] = "backups";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "backups";
$proto21["m_srcTableName"] = "backups";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id_bkp";
$proto21["m_columns"][] = "label";
$proto21["m_columns"][] = "date";
$proto21["m_columns"][] = "obs";
$proto21["m_columns"][] = "longdata";
$proto21["m_columns"][] = "update";
$proto21["m_columns"][] = "user";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "backups";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "backups";
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
												$proto24=array();
						$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "backups",
	"m_srcTableName" => "backups"
));

$proto24["m_column"]=$obj;
$proto24["m_bAsc"] = 0;
$proto24["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto24);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="backups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_backups = createSqlQuery_backups();


	
		;

							

$tdatabackups[".sqlquery"] = $queryData_backups;

$tableEvents["backups"] = new eventsBase;
$tdatabackups[".hasEvents"] = false;

?>