<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapings = array();
	$tdatapings[".truncateText"] = true;
	$tdatapings[".NumberOfChars"] = 80;
	$tdatapings[".ShortName"] = "pings";
	$tdatapings[".OwnerID"] = "user";
	$tdatapings[".OriginalTable"] = "pings";

//	field labels
$fieldLabelspings = array();
$fieldToolTipspings = array();
$pageTitlespings = array();

if(mlang_getcurrentlang()=="Portuguese(Brazil)")
{
	$fieldLabelspings["Portuguese(Brazil)"] = array();
	$fieldToolTipspings["Portuguese(Brazil)"] = array();
	$pageTitlespings["Portuguese(Brazil)"] = array();
	$fieldLabelspings["Portuguese(Brazil)"]["id_ping"] = "Id Ping";
	$fieldToolTipspings["Portuguese(Brazil)"]["id_ping"] = "";
	$fieldLabelspings["Portuguese(Brazil)"]["date"] = "Date";
	$fieldToolTipspings["Portuguese(Brazil)"]["date"] = "";
	$fieldLabelspings["Portuguese(Brazil)"]["obs"] = "Obs";
	$fieldToolTipspings["Portuguese(Brazil)"]["obs"] = "";
	$fieldLabelspings["Portuguese(Brazil)"]["user"] = "User";
	$fieldToolTipspings["Portuguese(Brazil)"]["user"] = "";
	if (count($fieldToolTipspings["Portuguese(Brazil)"]))
		$tdatapings[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspings[""] = array();
	$fieldToolTipspings[""] = array();
	$pageTitlespings[""] = array();
	$fieldLabelspings[""]["id_ping"] = "Id Ping";
	$fieldToolTipspings[""]["id_ping"] = "";
	$fieldLabelspings[""]["date"] = "Date";
	$fieldToolTipspings[""]["date"] = "";
	$fieldLabelspings[""]["obs"] = "Obs";
	$fieldToolTipspings[""]["obs"] = "";
	$fieldLabelspings[""]["user"] = "User";
	$fieldToolTipspings[""]["user"] = "";
	if (count($fieldToolTipspings[""]))
		$tdatapings[".isUseToolTips"] = true;
}


	$tdatapings[".NCSearch"] = true;



$tdatapings[".shortTableName"] = "pings";
$tdatapings[".nSecOptions"] = 1;
$tdatapings[".recsPerRowList"] = 1;
$tdatapings[".recsPerRowPrint"] = 1;
$tdatapings[".mainTableOwnerID"] = "user";
$tdatapings[".moveNext"] = 1;
$tdatapings[".entityType"] = 0;

$tdatapings[".strOriginalTableName"] = "pings";





$tdatapings[".showAddInPopup"] = false;

$tdatapings[".showEditInPopup"] = false;

$tdatapings[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapings[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapings[".fieldsForRegister"] = array();

$tdatapings[".listAjax"] = false;

	$tdatapings[".audit"] = false;

	$tdatapings[".locking"] = false;



$tdatapings[".list"] = true;

$tdatapings[".view"] = true;


$tdatapings[".exportTo"] = true;

$tdatapings[".printFriendly"] = true;


$tdatapings[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapings[".searchSaving"] = false;
//

$tdatapings[".showSearchPanel"] = true;
		$tdatapings[".flexibleSearch"] = true;

if (isMobile())
	$tdatapings[".isUseAjaxSuggest"] = false;
else
	$tdatapings[".isUseAjaxSuggest"] = true;

$tdatapings[".rowHighlite"] = true;



$tdatapings[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapings[".isUseTimeForSearch"] = false;



$tdatapings[".badgeColor"] = "D2AF80";


$tdatapings[".allSearchFields"] = array();
$tdatapings[".filterFields"] = array();
$tdatapings[".requiredSearchFields"] = array();

$tdatapings[".allSearchFields"][] = "date";
	$tdatapings[".allSearchFields"][] = "obs";
	$tdatapings[".allSearchFields"][] = "user";
	

$tdatapings[".googleLikeFields"] = array();
$tdatapings[".googleLikeFields"][] = "id_ping";
$tdatapings[".googleLikeFields"][] = "date";
$tdatapings[".googleLikeFields"][] = "obs";
$tdatapings[".googleLikeFields"][] = "user";


$tdatapings[".advSearchFields"] = array();
$tdatapings[".advSearchFields"][] = "id_ping";
$tdatapings[".advSearchFields"][] = "date";
$tdatapings[".advSearchFields"][] = "obs";
$tdatapings[".advSearchFields"][] = "user";

$tdatapings[".tableType"] = "list";

$tdatapings[".printerPageOrientation"] = 0;
$tdatapings[".nPrinterPageScale"] = 100;

$tdatapings[".nPrinterSplitRecords"] = 40;

$tdatapings[".nPrinterPDFSplitRecords"] = 40;



$tdatapings[".geocodingEnabled"] = false;





$tdatapings[".listGridLayout"] = 3;





// view page pdf

// print page pdf


$tdatapings[".pageSize"] = 20;

$tdatapings[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapings[".strOrderBy"] = $tstrOrderBy;

$tdatapings[".orderindexes"] = array();

$tdatapings[".sqlHead"] = "SELECT id_ping,  	`date`,  	obs,  	`user`";
$tdatapings[".sqlFrom"] = "FROM pings";
$tdatapings[".sqlWhereExpr"] = "";
$tdatapings[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapings[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapings[".arrGroupsPerPage"] = $arrGPP;

$tdatapings[".highlightSearchResults"] = true;

$tableKeyspings = array();
$tableKeyspings[] = "id_ping";
$tdatapings[".Keys"] = $tableKeyspings;

$tdatapings[".listFields"] = array();
$tdatapings[".listFields"][] = "date";
$tdatapings[".listFields"][] = "obs";
$tdatapings[".listFields"][] = "user";

$tdatapings[".hideMobileList"] = array();


$tdatapings[".viewFields"] = array();
$tdatapings[".viewFields"][] = "date";
$tdatapings[".viewFields"][] = "obs";
$tdatapings[".viewFields"][] = "user";

$tdatapings[".addFields"] = array();

$tdatapings[".masterListFields"] = array();
$tdatapings[".masterListFields"][] = "id_ping";
$tdatapings[".masterListFields"][] = "date";
$tdatapings[".masterListFields"][] = "obs";
$tdatapings[".masterListFields"][] = "user";

$tdatapings[".inlineAddFields"] = array();

$tdatapings[".editFields"] = array();

$tdatapings[".inlineEditFields"] = array();

$tdatapings[".exportFields"] = array();
$tdatapings[".exportFields"][] = "date";
$tdatapings[".exportFields"][] = "obs";
$tdatapings[".exportFields"][] = "user";

$tdatapings[".importFields"] = array();

$tdatapings[".printFields"] = array();
$tdatapings[".printFields"][] = "date";
$tdatapings[".printFields"][] = "obs";
$tdatapings[".printFields"][] = "user";

//	id_ping
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id_ping";
	$fdata["GoodName"] = "id_ping";
	$fdata["ownerTable"] = "pings";
	$fdata["Label"] = GetFieldLabel("pings","id_ping");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
	
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "id_ping";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id_ping";

	
	
			
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








	$tdatapings["id_ping"] = $fdata;
//	date
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "date";
	$fdata["GoodName"] = "date";
	$fdata["ownerTable"] = "pings";
	$fdata["Label"] = GetFieldLabel("pings","date");
	$fdata["FieldType"] = 135;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapings["date"] = $fdata;
//	obs
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "obs";
	$fdata["GoodName"] = "obs";
	$fdata["ownerTable"] = "pings";
	$fdata["Label"] = GetFieldLabel("pings","obs");
	$fdata["FieldType"] = 201;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
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




	$tdatapings["obs"] = $fdata;
//	user
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "user";
	$fdata["GoodName"] = "user";
	$fdata["ownerTable"] = "pings";
	$fdata["Label"] = GetFieldLabel("pings","user");
	$fdata["FieldType"] = 200;

	
	
	
	
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "user";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`user`";

	
	
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




	$tdatapings["user"] = $fdata;


$tables_data["pings"]=&$tdatapings;
$field_labels["pings"] = &$fieldLabelspings;
$fieldToolTips["pings"] = &$fieldToolTipspings;
$page_titles["pings"] = &$pageTitlespings;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pings"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pings"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pings()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id_ping,  	`date`,  	obs,  	`user`";
$proto0["m_strFrom"] = "FROM pings";
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
	"m_strName" => "id_ping",
	"m_strTable" => "pings",
	"m_srcTableName" => "pings"
));

$proto6["m_sql"] = "id_ping";
$proto6["m_srcTableName"] = "pings";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "date",
	"m_strTable" => "pings",
	"m_srcTableName" => "pings"
));

$proto8["m_sql"] = "`date`";
$proto8["m_srcTableName"] = "pings";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "obs",
	"m_strTable" => "pings",
	"m_srcTableName" => "pings"
));

$proto10["m_sql"] = "obs";
$proto10["m_srcTableName"] = "pings";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "user",
	"m_strTable" => "pings",
	"m_srcTableName" => "pings"
));

$proto12["m_sql"] = "`user`";
$proto12["m_srcTableName"] = "pings";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "pings";
$proto15["m_srcTableName"] = "pings";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id_ping";
$proto15["m_columns"][] = "date";
$proto15["m_columns"][] = "obs";
$proto15["m_columns"][] = "user";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "pings";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "pings";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pings";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pings = createSqlQuery_pings();


	
		;

				

$tdatapings[".sqlquery"] = $queryData_pings;

$tableEvents["pings"] = new eventsBase;
$tdatapings[".hasEvents"] = false;

?>