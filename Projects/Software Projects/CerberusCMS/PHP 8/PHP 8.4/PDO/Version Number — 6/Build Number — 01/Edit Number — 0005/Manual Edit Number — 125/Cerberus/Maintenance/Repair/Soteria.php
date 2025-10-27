<?php
/*
 ============================================================================================================
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
 + Cerberus Content Management System
 + ----------------------------------------------------------------------------------------------------------
 + - Author			 : Gary Christopher Johnson of Oildale In Southern California
 + - Company			 : CerberusCMS, Free and Open Source Software
 + - Company Address		 : Oildale In Southern California, United States of America
 + - Electronic Mail Address	 : CerberusCMS6@Proton.me
 + - Document Notes		 : View this file in a non-formatting text editor without word-wrap for the
 +				 : correct display of this programming code and its indentation.
 + ----------------------------------------------------------------------------------------------------------
 +   () () () () ()
 +  () ()()	()()
 +  ------
 + Maintenance Application
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => Maintenance => Soteria.php
 + - This File, Version		 : 0.7.7
 + - This File, Programming Code : Pure Pre-Hyper-Text-Post-Processor
 + - Programming Code Model	 : Procedural, Functional, Object Oriented :: Pre-Order Algebraic
 + -				 :					   :: Pre-Order Logical
 + - Compatibility		 : Extensible-Markup-Language		   :: Version Numbers: 1, 1.1
 + - Compatibility		 : Hyper-Text-Markup-Language		   :: Version Numbers: 1, 2, 3, 4, 5
 + - Compatibility		 : Pre-Hyper-Text-Post-Processor 	   :: Version Numbers: 5, 7, 8
 + - Compatibility		 : Zend Engine				   :: Version Numbers: 3, 4
 + - Official Release Date	 : Saturday, April 19th of 2025
 + ----------------------------------------------------------------------------------------------------------
 + -------------------------------------------------------------------------------      - Titan -
 + --[][]--[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[][][]------------   []++++||=======>
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |'-._/\_.-'|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |    []    |
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    |___-[]-___|
 + -[]-----[][][]--[][][]--[][][]---[][][]--[][][]--[]--[]------[]----------------    |__((**))__|
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]----------------    \   -[]-   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]------------/-\-     \   []   /
 + -[]-----[]------[]--[]--[]---[]--[]------[]--[]--[]--[]------[]---VERSION--|6|-	\  []  /
 + --[][]--[][][]--[]--[]--[][][]---[][][]--[]--[]--[][][]--[][][]------------\-/-	 '.[].'
 + -------------------------------------------------------------------------------
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Build Number: 01 ~ Final
 + ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ Edit Number : 0,005
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Maintenance :: Repair
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
 + File Inclusion
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + File Inclusion :: Configuration Files
 +
 ============================================================================================================
*/

include_once "../../System/Configuration/Global_Configuration.php";
include_once "../../System/Configuration/Global_Server_Configuration.php";
include_once "../../System/Security/Module/Sanitization/Default/Sanitization.cerberus";

/*
 ============================================================================================================
 +
 + [ @ ] Display :: Maintenance :: Repair :: Options
 +
 ============================================================================================================
*/

echo ("
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<HTML>
	<HEAD>
		<TITLE>$_PROJECT_STRING_NAME_EXTENDED - Diagnostic Utility - Version Number: 1.3</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"../../Theme/$_INTERNAL_FILE_ARCHITECT_INSTALL_DIRECTORY_THEME_VIDEO_RESOLUTION/Global/Style_Sheet/Style.css\" TYPE=\"text/css\">
		<Link REL=\"shortcut icon\" HREF=\"../../Theme/$_INTERNAL_FILE_ARCHITECT_INSTALL_DIRECTORY_THEME_VIDEO_RESOLUTION/Global/Image/Icon/FavIcon.ico\" TYPE=\"image/x-icon\">
		<META HTTP-EQUIV=\"Content-Type\" CONTENT=\"text/html;charset=utf-8\">
	</HEAD>

	<BODY>
<CENTER>
[&nbsp;
<A HREF=\"?Repair&#61;Kernel\" TITLE=\":: Re-Install The Kernel File From Backup ::\">Re-Install Kernel File From Backup</A>&nbsp;
&middot; <A HREF=\"?Repair&#61;Applications\" TITLE=\":: Re-Install All Application Module Files From Backup ::\">Re-Install Application Module Files From Backup</A>&nbsp;
&middot; <A HREF=\"?Repair&#61;Configuration\" TITLE=\":: Re-Install The Configuration File From Backup ::\">Re-Install Configuration File From Backup</A>&nbsp;
]
</CENTER>
<HR><BR><BR>
");

/*
 ============================================================================================================
 +
 + [ @ ] IF: Internal Application :: Is: Repair :: Kernel
 +
 ============================================================================================================
*/

if ($_GET['Repair'] == "Kernel") {

$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_KERNEL			= $_POST['AMM_Repair_Input_Password_Repair_Kernel'];
$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_KERNEL_HASH_SHA256	= hash('sha256', $_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_KERNEL);

/*
 ============================================================================================================
 + IF: Input :: Maintenance Password :: Variable :: Has Not Executed, Display Input Form
 ============================================================================================================
*/

if (!$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_KERNEL) {

echo ("
	<FORM ACTION=\"?Repair&#61;Kernel\" METHOD=\"POST\">
		Maintenance Password:<BR>
		<INPUT TYPE=\"PASSWORD\" NAME=\"AMM_Repair_Input_Password_Repair_Kernel\"><BR>
		<INPUT TYPE=\"SUBMIT\" VALUE=\"Confirm Password\"><BR>
	</FORM>
");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Variable :: Has Executed
 ============================================================================================================
*/

} else { // [ + ] IF: Input :: Password :: Variable :: Has Executed

/*
 ============================================================================================================
 + IF: Internal Application :: Is: Repair :: Kernel :: Input :: Password :: Matches Maintenance Password
 ============================================================================================================
*/

if ($_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_KERNEL_HASH_SHA256 == "$_SYSTEM_SETTINGS_PASSWORD_MAINTENANCE") {

echo ("* Repair Application Message: Finding Kernel File: $_INTERNAL_FILE_KERNEL ... Wait.<BR>");
echo ("* Splashing Kernel File Location With Zero Files... Wait.<BR>");

unlink("../../$_INTERNAL_FILE_KERNEL");
copy("../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../$_INTERNAL_FILE_KERNEL");
unlink("../../$_INTERNAL_FILE_KERNEL");
copy("../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../$_INTERNAL_FILE_KERNEL");
unlink("../../$_INTERNAL_FILE_KERNEL");
copy("../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../$_INTERNAL_FILE_KERNEL");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Kernel File From Backup... Wait.<BR>");

copy("../../System/Kernel/Backup/Current.Kernel","../../$_INTERNAL_FILE_KERNEL");

echo ("* [ Done ]<BR>");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Is: Incorrect
 ============================================================================================================
*/

} else {

echo ("* Repair Application Message: The Provided Maintenance Password Is Incorrect.");

} // [ + ] IF: Input :: Password :: Variable :: Has Executed

} // [ + ] IF: Input :: Password :: Matches :: Maintenance Password

} // [ + ] IF: Internal Application: Is: Repair :: Kernel

/*
 ============================================================================================================
 +
 + [ @ ] IF: Internal Application :: Is: Repair :: Applications
 +
 ============================================================================================================
*/

if ($_GET['Repair'] == "Applications") {

$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_APPLICATIONS		= $_POST['AMM_Repair_Input_Password_Repair_Applications'];
$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_APPLICATIONS_HASH_SHA256	= hash('sha256', $_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_APPLICATIONS);

/*
 ============================================================================================================
 + IF: Input :: Maintenance Password :: Variable :: Has Not Executed, Display Input Form
 ============================================================================================================
*/

if (!$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_APPLICATIONS) {

echo ("
	<FORM ACTION=\"?Repair&#61;Applications\" METHOD=\"POST\">
		Maintenance Password:<BR>
		<INPUT TYPE=\"PASSWORD\" NAME=\"AMM_Repair_Input_Password_Repair_Applications\"><BR>
		<INPUT TYPE=\"SUBMIT\" VALUE=\"Confirm Password\"><BR>
	</FORM>
");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Variable :: Has Executed
 ============================================================================================================
*/

} else { // [ + ] IF: Input :: Password :: Variable :: Has Executed

/*
 ============================================================================================================
 + IF: Internal Application :: Is: Repair :: Applications :: Input :: Password :: Matches Maintenance Password
 ============================================================================================================
*/

if ($_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_APPLICATIONS_HASH_SHA256 == "$_SYSTEM_SETTINGS_PASSWORD_MAINTENANCE") {

/*
 ============================================================================================================
 + Repair :: Applications :: Administration
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Administration Applications Wait.<BR>");
echo ("* Unlinking Administration Applications... Wait.<BR>");

unlink("../../Applications/Administration/Visibility/Administration/Accounts");
unlink("../../Applications/Administration/Visibility/Administration/Applications");
unlink("../../Applications/Administration/Visibility/Administration/Archive");
unlink("../../Applications/Administration/Visibility/Administration/Control_Panel");
unlink("../../Applications/Administration/Visibility/Administration/Emulators");
unlink("../../Applications/Administration/Visibility/Administration/File_Categories");
unlink("../../Applications/Administration/Visibility/Administration/File_Manager");
unlink("../../Applications/Administration/Visibility/Administration/Forum");
unlink("../../Applications/Administration/Visibility/Administration/GIT");
unlink("../../Applications/Administration/Visibility/Administration/Messenger");
unlink("../../Applications/Administration/Visibility/Administration/Networking");
unlink("../../Applications/Administration/Visibility/Administration/Panels");
unlink("../../Applications/Administration/Visibility/Administration/PlugIns");
unlink("../../Applications/Administration/Visibility/Administration/Publish");
unlink("../../Applications/Administration/Visibility/Administration/Ranks");
unlink("../../Applications/Administration/Visibility/Administration/Referrers");
unlink("../../Applications/Administration/Visibility/Administration/Robot_Monitor");
unlink("../../Applications/Administration/Visibility/Administration/Settings");
unlink("../../Applications/Administration/Visibility/Administration/Submissions");
unlink("../../Applications/Administration/Visibility/Administration/Terminal");
unlink("../../Applications/Administration/Visibility/Administration/Themes");
unlink("../../Applications/Administration/Visibility/Administration/Update");
unlink("../../Applications/Administration/Visibility/Administration/VoIP");
unlink("../../Applications/Administration/Visibility/Administration/Web_Pages");
unlink("../../Applications/Administration/Visibility/Administration/PHP_Information.php");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Administration Application File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Accounts");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Applications");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Archive");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Control_Panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Emulators");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/File_Categories");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/File_Manager");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Forum");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/GIT");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Messenger");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Networking");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Panels");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/PlugIns");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Publish");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Ranks");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Referrers");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Robot_Monitor");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Settings");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Submissions");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Terminal");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Themes");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Update");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/VoIP");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/Web_Pages");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Administration/Visibility/Administration/PHP_Information.php");

unlink("../../Applications/Administration/Visibility/Administration/Accounts");
unlink("../../Applications/Administration/Visibility/Administration/Applications");
unlink("../../Applications/Administration/Visibility/Administration/Archive");
unlink("../../Applications/Administration/Visibility/Administration/Control_Panel");
unlink("../../Applications/Administration/Visibility/Administration/Emulators");
unlink("../../Applications/Administration/Visibility/Administration/File_Categories");
unlink("../../Applications/Administration/Visibility/Administration/File_Manager");
unlink("../../Applications/Administration/Visibility/Administration/Forum");
unlink("../../Applications/Administration/Visibility/Administration/GIT");
unlink("../../Applications/Administration/Visibility/Administration/Messenger");
unlink("../../Applications/Administration/Visibility/Administration/Networking");
unlink("../../Applications/Administration/Visibility/Administration/Panels");
unlink("../../Applications/Administration/Visibility/Administration/PlugIns");
unlink("../../Applications/Administration/Visibility/Administration/Publish");
unlink("../../Applications/Administration/Visibility/Administration/Ranks");
unlink("../../Applications/Administration/Visibility/Administration/Referrers");
unlink("../../Applications/Administration/Visibility/Administration/Robot_Monitor");
unlink("../../Applications/Administration/Visibility/Administration/Settings");
unlink("../../Applications/Administration/Visibility/Administration/Submissions");
unlink("../../Applications/Administration/Visibility/Administration/Terminal");
unlink("../../Applications/Administration/Visibility/Administration/Themes");
unlink("../../Applications/Administration/Visibility/Administration/Update");
unlink("../../Applications/Administration/Visibility/Administration/VoIP");
unlink("../../Applications/Administration/Visibility/Administration/Web_Pages");
unlink("../../Applications/Administration/Visibility/Administration/PHP_Information.php");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Administration Applications From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Accounts","../../Applications/Administration/Visibility/Administration/Accounts");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Applications","../../Applications/Administration/Visibility/Administration/Applications");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Archive","../../Applications/Administration/Visibility/Administration/Archive");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Control_Panel","../../Applications/Administration/Visibility/Administration/Control_Panel");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Emulators","../../Applications/Administration/Visibility/Administration/Emulators");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/File_Categories","../../Applications/Administration/Visibility/Administration/File_Categories");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/File_Manager","../../Applications/Administration/Visibility/Administration/File_Manager");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Forum","../../Applications/Administration/Visibility/Administration/Forum");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/GIT","../../Applications/Administration/Visibility/Administration/GIT");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Messenger","../../Applications/Administration/Visibility/Administration/Messenger");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Networking","../../Applications/Administration/Visibility/Administration/Networking");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Panels","../../Applications/Administration/Visibility/Administration/Panels");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/PlugIns","../../Applications/Administration/Visibility/Administration/PlugIns");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Publish","../../Applications/Administration/Visibility/Administration/Publish");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Ranks","../../Applications/Administration/Visibility/Administration/Ranks");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Referrers","../../Applications/Administration/Visibility/Administration/Referrers");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Robot_Monitor","../../Applications/Administration/Visibility/Administration/Robot_Monitor");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Settings","../../Applications/Administration/Visibility/Administration/Settings");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Submissions","../../Applications/Administration/Visibility/Administration/Submissions");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Terminal","../../Applications/Administration/Visibility/Administration/Terminal");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Themes","../../Applications/Administration/Visibility/Administration/Themes");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Update","../../Applications/Administration/Visibility/Administration/Update");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/VoIP","../../Applications/Administration/Visibility/Administration/VoIP");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/Web_Pages","../../Applications/Administration/Visibility/Administration/Web_Pages");
copy("../../System/Security/Integrity/Backup/Applications/Administration/Visibility/Administration/PHP_Information.php","../../Applications/Administration/Visibility/Administration/PHP_Information.php");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Repair :: Applications :: Administration :: Root-Administration
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Root-Administration Applications Wait.<BR>");
echo ("* Unlinking Root-Administration Applications... Wait.<BR>");

unlink("../../Applications/Root/Tasks");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Root-Administration Application File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Root/Tasks");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Root-Administration Applications From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Applications/Root/Tasks","../../Applications/Root/Tasks");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Repair :: Applications :: Administration :: Services Root-Administration
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Services Root-Administration Applications Wait.<BR>");
echo ("* Unlinking Services Root-Administration Applications... Wait.<BR>");

unlink("../../Applications/Services/Commander");
unlink("../../Applications/Services/Control_Panel");
unlink("../../Applications/Services/Integrity");
unlink("../../Applications/Services/Kernel");
unlink("../../Applications/Services/Loops");
unlink("../../Applications/Services/Services");
unlink("../../Applications/Services/Tasks");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Services Root-Administration Application File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Control_Panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Integrity");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Kernel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Loops");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Services");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Services/Tasks");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Services Root-Administration Applications From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Applications/Services/Control_Panel/","../../Applications/Services/Control_Panel");
copy("../../System/Security/Integrity/Backup/Applications/Services/Integrity/","../../Applications/Services/Integrity");
copy("../../System/Security/Integrity/Backup/Applications/Services/Kernel/","../../Applications/Services/Kernel");
copy("../../System/Security/Integrity/Backup/Applications/Services/Loops/","../../Applications/Services/Loops");
copy("../../System/Security/Integrity/Backup/Applications/Services/Services/","../../Applications/Services/Services");
copy("../../System/Security/Integrity/Backup/Applications/Services/Tasks/","../../Applications/Services/Tasks");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Repair :: Applications :: Registered Member Account
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Registered Member Account-Level Applications... Wait.<BR>");
echo ("* Unlinking Registered Member Account Applications... Wait.<BR>");

unlink("../../Applications/Member/Visibility/Member/Account_Data");
unlink("../../Applications/Member/Visibility/Member/Account_Recovery");
unlink("../../Applications/Member/Visibility/Member/Active_Members");
unlink("../../Applications/Member/Visibility/Member/All_News");
unlink("../../Applications/Member/Visibility/Member/All_Shouts");
unlink("../../Applications/Member/Visibility/Member/Application_List");
unlink("../../Applications/Member/Visibility/Member/Articles");
unlink("../../Applications/Member/Visibility/Member/Calculator");
unlink("../../Applications/Member/Visibility/Member/Calendar");
unlink("../../Applications/Member/Visibility/Member/Clock");
unlink("../../Applications/Member/Visibility/Member/Comment");
unlink("../../Applications/Member/Visibility/Member/Contact_Administrator");
unlink("../../Applications/Member/Visibility/Member/Contacts");
unlink("../../Applications/Member/Visibility/Member/Control_Panel");
unlink("../../Applications/Member/Visibility/Member/Devices");
unlink("../../Applications/Member/Visibility/Member/Documentation");
unlink("../../Applications/Member/Visibility/Member/Download");
unlink("../../Applications/Member/Visibility/Member/Electronic_Mail");
unlink("../../Applications/Member/Visibility/Member/Emulators");
unlink("../../Applications/Member/Visibility/Member/Files");
unlink("../../Applications/Member/Visibility/Member/Forum");
unlink("../../Applications/Member/Visibility/Member/Forward");
unlink("../../Applications/Member/Visibility/Member/Friend");
unlink("../../Applications/Member/Visibility/Member/Language");
unlink("../../Applications/Member/Visibility/Member/Legal");
unlink("../../Applications/Member/Visibility/Member/Lightning_Calculate");
unlink("../../Applications/Member/Visibility/Member/List");
unlink("../../Applications/Member/Visibility/Member/Login");
unlink("../../Applications/Member/Visibility/Member/Market");
unlink("../../Applications/Member/Visibility/Member/Media_Player");
unlink("../../Applications/Member/Visibility/Member/Member_Directory");
unlink("../../Applications/Member/Visibility/Member/Messenger");
unlink("../../Applications/Member/Visibility/Member/News");
unlink("../../Applications/Member/Visibility/Member/Notepad");
unlink("../../Applications/Member/Visibility/Member/Pages");
unlink("../../Applications/Member/Visibility/Member/Profile");
unlink("../../Applications/Member/Visibility/Member/Recommendations");
unlink("../../Applications/Member/Visibility/Member/Referrers");
unlink("../../Applications/Member/Visibility/Member/Register");
unlink("../../Applications/Member/Visibility/Member/Reset_Password");
unlink("../../Applications/Member/Visibility/Member/Search");
unlink("../../Applications/Member/Visibility/Member/Submit_News");
unlink("../../Applications/Member/Visibility/Member/System");
unlink("../../Applications/Member/Visibility/Member/System_Message");
unlink("../../Applications/Member/Visibility/Member/Theme");
unlink("../../Applications/Member/Visibility/Member/Travel");
unlink("../../Applications/Member/Visibility/Member/Update_Account");
unlink("../../Applications/Member/Visibility/Member/Update_Password");
unlink("../../Applications/Member/Visibility/Member/Upload");
unlink("../../Applications/Member/Visibility/Member/VoIP");
unlink("../../Applications/Member/Visibility/Member/Webspace");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Registered Member Account Application File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Account_Data");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Account_Recovery");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Active_Members");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/All_News");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/All_Shouts");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Application_List");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Articles");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Calculator");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Calendar");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Clock");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Comment");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Contact_Administrator");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Contacts");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Control_Panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Devices");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Documentation");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Download");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Electronic_Mail");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Emulators");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Files");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Forum");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Forward");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Friend");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Language");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Lightning_Calculate");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/List");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Login");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Legal");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Market");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Media_Player");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Member_Directory");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Messenger");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/News");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Notepad");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Pages");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Profile");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Recommendations");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Referrers");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Register");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Reset_Password");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Search");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Submit_News");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/System");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/System_Message");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Theme");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Travel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Update_Account");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Update_Password");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Upload");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/VoIP");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Member/Visibility/Member/Webspace");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Registered Member Account Applications From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Account_Data","../../Applications/Member/Visibility/Member/Account_Data");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Account_Recovery","../../Applications/Member/Visibility/Member/Account_Recovery");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Active_Members","../../Applications/Member/Visibility/Member/Active_Members");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/All_News","../../Applications/Member/Visibility/Member/All_News");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/All_Shouts","../../Applications/Member/Visibility/Member/All_Shouts");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Application_List","../../Applications/Member/Visibility/Member/Application_List");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Articles","../../Applications/Member/Visibility/Member/Articles");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Calculator","../../Applications/Member/Visibility/Member/Calculator");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Calendar","../../Applications/Member/Visibility/Member/Calendar");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Clock","../../Applications/Member/Visibility/Member/Clock");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Comment","../../Applications/Member/Visibility/Member/Comment");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Contact_Administrator","../../Applications/Member/Visibility/Member/Contact_Administrator");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Contacts","../../Applications/Member/Visibility/Member/Contacts");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Control_Panel","../../Applications/Member/Visibility/Member/Control_Panel");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Devices","../../Applications/Member/Visibility/Member/Devices");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Documentation","../../Applications/Member/Visibility/Member/Documentation");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Download","../../Applications/Member/Visibility/Member/Download");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Electronic_Mail","../../Applications/Member/Visibility/Member/Electronic_Mail");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Emulators","../../Applications/Member/Visibility/Member/Emulators");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Files","../../Applications/Member/Visibility/Member/Files");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Forum","../../Applications/Member/Visibility/Member/Forum");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Forward","../../Applications/Member/Visibility/Member/Forward");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Friend","../../Applications/Member/Visibility/Member/Friend");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Language","../../Applications/Member/Visibility/Member/Language");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Legal","../../Applications/Member/Visibility/Member/Legal");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Lightning_Calculate","../../Applications/Member/Visibility/Member/Lightning_Calculate");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/List","../../Applications/Member/Visibility/Member/List");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Login","../../Applications/Member/Visibility/Member/Login");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Market","../../Applications/Member/Visibility/Member/Market");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Media_Player","../../Applications/Member/Visibility/Member/Media_Player");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Member_Directory","../../Applications/Member/Visibility/Member/Member_Directory");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Messenger","../../Applications/Member/Visibility/Member/Messenger");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/News","../../Applications/Member/Visibility/Member/News");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Notepad","../../Applications/Member/Visibility/Member/Notepad");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Pages","../../Applications/Member/Visibility/Member/Pages");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Profile","../../Applications/Member/Visibility/Member/Profile");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Recommendations","../../Applications/Member/Visibility/Member/Recommendations");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Referrers","../../Applications/Member/Visibility/Member/Referrers");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Register","../../Applications/Member/Visibility/Member/Register");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Reset_Password","../../Applications/Member/Visibility/Member/Reset_Password");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Search","../../Applications/Member/Visibility/Member/Search");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Submit_News","../../Applications/Member/Visibility/Member/Submit_News");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/System","../../Applications/Member/Visibility/Member/System");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/System_Message","../../Applications/Member/Visibility/Member/System_Message");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Theme","../../Applications/Member/Visibility/Member/Theme");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Travel","../../Applications/Member/Visibility/Member/Travel");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Update_Account","../../Applications/Member/Visibility/Member/Update_Account");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Update_Password","../../Applications/Member/Visibility/Member/Update_Password");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Upload","../../Applications/Member/Visibility/Member/Upload");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/VoIP","../../Applications/Member/Visibility/Member/VoIP");
copy("../../System/Security/Integrity/Backup/Applications/Member/Visibility/Member/Webspace","../../Applications/Member/Visibility/Member/Webspace");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + Repair :: Applications :: Panels
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Panel Applications Wait.<BR>");
echo ("* Unlinking Panel Applications... Wait.<BR>");

unlink("../../Applications/Panel/Visibility/Member/Administration.panel");
unlink("../../Applications/Panel/Visibility/Member/Applications_Panel.panel");
unlink("../../Applications/Panel/Visibility/Member/Clock.panel");
unlink("../../Applications/Panel/Visibility/Member/Language.panel");
unlink("../../Applications/Panel/Visibility/Member/Latest_Articles.panel");
unlink("../../Applications/Panel/Visibility/Member/Latest_Files.panel");
unlink("../../Applications/Panel/Visibility/Member/Latest_Members.panel");
unlink("../../Applications/Panel/Visibility/Member/Latest_Shouts.panel");
unlink("../../Applications/Panel/Visibility/Member/Live_Video.panel");
unlink("../../Applications/Panel/Visibility/Member/Location.panel");
unlink("../../Applications/Panel/Visibility/Member/Media_Player.panel");
unlink("../../Applications/Panel/Visibility/Member/Member_Panel.panel");
unlink("../../Applications/Panel/Visibility/Member/Moderator.panel");
unlink("../../Applications/Panel/Visibility/Member/Networking.panel");
unlink("../../Applications/Panel/Visibility/Member/Project_Badges.panel");
unlink("../../Applications/Panel/Visibility/Member/RSS_Panel.panel");
unlink("../../Applications/Panel/Visibility/Member/Theme.panel");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Panel Application File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Administration.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Applications_Panel.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Clock.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Language.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Latest_Articles.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Latest_Files.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Latest_Members.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Latest_Shouts.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Live_Video.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Location.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Media_Player.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Member_Panel.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Moderator.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Networking.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Project_Badges.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/RSS_Panel.panel");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../Applications/Panel/Visibility/Member/Theme.panel");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Panel Applications From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Administration.panel","../../Applications/Panel/Visibility/Member/Administration.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Applications_Panel.panel","../../Applications/Panel/Visibility/Member/Applications_Panel.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Clock.panel","../../Applications/Panel/Visibility/Member/Clock.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Language.panel","../../Applications/Panel/Visibility/Member/Language.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Latest_Articles.panel","../../Applications/Panel/Visibility/Member/Latest_Articles.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Latest_Files.panel","../../Applications/Panel/Visibility/Member/Latest_Files.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Latest_Members.panel","../../Applications/Panel/Visibility/Member/Latest_Members.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Latest_Shouts.panel","../../Applications/Panel/Visibility/Member/Latest_Shouts.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Live_Video.panel","../../Applications/Panel/Visibility/Member/Live_Video.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Location.panel","../../Applications/Panel/Visibility/Member/Location.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Media_Player.panel","../../Applications/Panel/Visibility/Member/Media_Player.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Member_Panel.panel","../../Applications/Panel/Visibility/Member/Member_Panel.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Moderator.panel","../../Applications/Panel/Visibility/Member/Moderator.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Networking.panel","../../Applications/Panel/Visibility/Member/Networking.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Project_Badges.panel","../../Applications/Panel/Visibility/Member/Project_Badges.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/RSS_Panel.panel","../../Applications/Panel/Visibility/Member/RSS_Panel.panel");
copy("../../System/Security/Integrity/Backup/Applications/Panel/Visibility/Member/Theme.panel","../../Applications/Panel/Visibility/Member/Theme.panel");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Is: Incorrect
 ============================================================================================================
*/

} else {

echo ("* Repair Application Message: The Provided Maintenance Password Is Incorrect.");

} // [ + ] IF: Input :: Password :: Variable :: Has Executed

} // [ + ] IF: Input :: Password :: Matches :: Maintenance Password

} // [ + ] IF: Internal Application: Is: Repair :: Applications

/*
 ============================================================================================================
 +
 + [ @ ] IF: Internal Application :: Is: Repair :: Configuration File
 +
 ============================================================================================================
*/

if ($_GET['Repair'] == "Configuration") {

$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_CONFIGURATION		= $_POST['AMM_Repair_Input_Password_Repair_Configuration'];
$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_CONFIGURATION_HASH_SHA256	= hash('sha256', $_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_CONFIGURATION);

/*
 ============================================================================================================
 + IF: Input :: Maintenance Password :: Variable :: Has Not Executed, Display Input Form
 ============================================================================================================
*/

if (!$_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_CONFIGURATION) {

echo ("
	<FORM ACTION=\"?Repair&#61;Configuration\" METHOD=\"POST\">
		Maintenance Password:<BR>
		<INPUT TYPE=\"PASSWORD\" NAME=\"AMM_Repair_Input_Password_Repair_Configuration\"><BR>
		<INPUT TYPE=\"SUBMIT\" VALUE=\"Confirm Password\"><BR>
	</FORM>
");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Variable :: Has Executed
 ============================================================================================================
*/

} else { // [ + ] IF: Input :: Password :: Variable :: Has Executed

/*
 ============================================================================================================
 + IF: Internal Application :: Is: Repair :: Applications :: Input :: Password :: Matches Maintenance Password
 ============================================================================================================
*/

if ($_Application_Module_Maintenance_Repair_INPUT_PASSWORD_REPAIR_CONFIGURATION_HASH_SHA256 == "$_SYSTEM_SETTINGS_PASSWORD_MAINTENANCE") {

/*
 ============================================================================================================
 + Repair :: Configuration Files
 ============================================================================================================
*/

echo ("* Repair Application Message: Finding Configuration Files... Wait.<BR>");
echo ("* Unlinking Configuration Files... Wait.<BR>");

unlink("../../System/Configuration/Global_Configuration.php");
unlink("../../System/Configuration/Global_Server_Configuration.php");

echo ("* [ Done ]<BR><BR>");

echo ("* Splashing Configuration File Locations With Zero Files... Wait.<BR>");

copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../System/Configuration/Global_Configuration.php");
copy("../../System/Plug-Ins/Secure-Delete/Default/Zero_5MB","../../System/Configuration/Global_Server_Configuration.php");

echo ("* [ Done ]<BR><BR>");

echo ("* Re-Installing Configuration Files From Backup... Wait.<BR>");

copy("../../System/Security/Integrity/Backup/Configuration/Global_Configuration.php","../../System/Configuration/Global_Configuration.php");
copy("../../System/Security/Integrity/Backup/Configuration/Global_Server_Configuration.php","../../System/Configuration/Global_Server_Configuration.php");

echo ("* [ Done ]<BR><BR>");

/*
 ============================================================================================================
 + ELSE: Input :: Maintenance Password :: Is: Incorrect
 ============================================================================================================
*/

} else {

echo ("* Repair Application Message: The Provided Maintenance Password Is Incorrect.");

} // [ + ] IF: Input :: Password :: Variable :: Has Executed

} // [ + ] IF: Input :: Password :: Matches :: Maintenance Password

} // [ + ] IF: Internal Application :: Is: Repair :: Configuration File
?>