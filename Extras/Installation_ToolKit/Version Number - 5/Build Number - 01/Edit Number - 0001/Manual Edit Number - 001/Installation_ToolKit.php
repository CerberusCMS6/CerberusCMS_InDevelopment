<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Oildale and Los Angeles In Southern California
 + - Company			 : CerberusCMS, Free and Open Source Software
 + - Company Address		 : Oildale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS5@Proton.me
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +    ()    ()  ()  ()
 +  ()  ()() () () -
 +  ------------------------------
 +  Pre-Installation Application
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Architect => ToolKit => Installation_ToolKit.php
 + - This File, Version		 : 0.7.4
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Extensible-Markup-Language		   :: Version Numbers: 1, 1.1
 + - Compatibility		 : Hyper-Text-Markup-Language		   :: Version Numbers: 1, 2, 3, 4, 5
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + - Compatibility		 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Friday, September 13th of 2024
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------      - Hades -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|5|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 01 ~ Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 0,001
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Extra :: Application :: Installation :: Installation ToolKit
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Error Reporting System
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: Off: All
 +
 ============================================================================================================
*/

error_reporting(0);

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: Off: Warning AND Notice
 +
 ============================================================================================================
*/

// [ C ] error_reporting("E_WARNING ^ E_NOTICE");

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: On: Error, Warning, Parse AND Notice
 +
 ============================================================================================================
*/

// [ C ] error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

/*
 ============================================================================================================
 +
 + Error Reporting System :: Error Reporting: On: All
 +
 ============================================================================================================
*/

// [ C ] error_reporting(-1);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Include :: Configuration Files
 +
 +
 +
 ============================================================================================================
*/

include_once ("../../System/Configuration/Global_Configuration.php");
include_once ("../../System/Configuration/Global_Server_Configuration.php");
include_once ("../../System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard");
include_once ("../../System/Security/Module/Sanitization/Default/Sanitization.$_INTERNAL_FILE_EXTENSION");

/*
 ============================================================================================================
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document :: Start
 +
 ============================================================================================================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Pre-Installation ToolKit</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
		</HEAD>
		
		<BODY>
				<CENTER>$_PROJECT_STRING_NAME_EXTENDED - Pre-Installation ToolKit</CENTER>
				<CENTER>[&nbsp;<A HREF=\"?\" TITLE=\":: Close All Open Applications ::\">Close Open Applications</A>&nbsp;&middot;&nbsp;</A><A HREF=\"?Application&#61;Unpack\" TITLE=\":: Unpack Downloaded Archives of $_PROJECT_STRING_NAME_EXTENDED To This Web Server ::\">Unpack $_PROJECT_STRING_NAME_EXTENDED Compressed Archive Package</A>&nbsp;&middot;&nbsp;<A HREF=\"?Application&#61;Terminal\" TITLE=\":: Open & Display :: The Post-Installation ToolKit Terminal Application ::\">Execute Terminal Commands</A>&nbsp;&middot;&nbsp;<A HREF=\"../../Architect.php\" TITLE=\":: Open & Display The $_PROJECT_STRING_NAME_EXTENDED Architect Installation Application ::\">Architect Installation Application</A>&nbsp;]</CENTER>
				<HR>
");

/*
 ============================================================================================================
 +
 + [ @ ] Unpack Packages
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal Application: Application :: Unpack
 ============================================================================================================
*/
	
if ($_GET["Application"] == "Unpack") {

$_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK_FILE					= $_POST['Installation_ToolKit_Zip_Archive_Unpack_File'];
$_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK_FILE_LOCATION				= $_POST['Installation_ToolKit_Zip_Archive_Unpack_File_Location'];
$_Installation_ToolKit_ZIP_Archive_Initialize						= new ZipArchive;
$_Installation_ToolKit_ZIP_Archive_Unpack						= $_Installation_ToolKit_ZIP_Archive_Initialize->open('$_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK');

if ($_Installation_ToolKit_ZIP_Archive_Unpack === TRUE) {

$_Installation_ToolKit_ZIP_Archive_Initialize->extractTo('$_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK_FILE_LOCATION');
$_Installation_ToolKit_ZIP_Archive_Initialize->close();

echo ("ToolKit Message: The File: $_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK_FILE Was Unpacked To The Location: $_Installation_ToolKit_POST_ZIP_ARCHIVE_UNPACK_FILE_LOCATION");

} else {

echo ("ToolKit Message: There was an error. I was not able to unpack this archive file.");

} // [ + ] IF: System: Unzip Downloaded Archive Package

} // [ + ] IF: Internal Application: Application :: Unpack :: Is: Activated

/*
 ============================================================================================================
 +
 + [ @ ] Execute Terminal Commands
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal Application: Application :: Terminal
 ============================================================================================================
*/
	 
if ($_GET["Application"] == "Terminal") {
	
$_Installation_ToolKit_POST_TERMINAL_COMMANDS						= $_POST['Installation_ToolKit_Terminal_Commands'];
	
if (!$_Installation_ToolKit_POST_TERMINAL_COMMANDS) {

echo ("
			<FORM ACTION=\"?Application&#61;Terminal\" METHOD=\"POST\">
				Please Visit: <A HREF=\"$_PROJECT_SERVER_URL_GITHUB_SECURE\" TARGET=\"_NEW\">$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED' - $_PROJECT_STRING_NAME_EXTENDED Archive Packages - Official GITHub Repository</A> for the most recent Archived $_PROJECT_STRING_NAME_UNIX compressed package<BR>
				<TEXTAREA ROWS=\"15\" COLS=\"75\" NAME=\"Installation_ToolKit_Terminal_Commands\">Execute Terminal Commands On This Operating System From This Pre-Hyper-Text-Post-Processor Script E.G.: 'wget -O $_PROJECT_STRING_NAME_SHORT.zip https://GITHub.com/$_PROJECT_SERVER_URL_PARTIAL/<File_Name_Here.zip>'</TEXTAREA><BR>
				<INPUT TYPE=\"SUBMIT\" VALUE=\"Execute Terminal Command\">
			</FORM>
");

} else {
	
		echo ("Executing Terminal Command: '$_Installation_ToolKit_POST_TERMINAL_COMMANDS'<BR>");
	
$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND						= shell_exec($_Installation_ToolKit_POST_TERMINAL_COMMANDS);
	
		echo ("$_Installation_ToolKit_EXECUTE_TERMINAL_COMMAND");

} // [ + ] IF: Terminal Command Variable Data Is Null

} // [ + ] IF: Internal Application: Terminal Is Activated

/*
 ============================================================================================================
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document :: End
 +
 ============================================================================================================
*/

echo ("
		</BODY>
</HTML>
");
?>