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
 +    ()  ()  () () --
 +  () ()  () --- ()
 +  ------------------------------
 +  System File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Root Directory => System => Configuration => Global_Configuration.php
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
 + [ ^ ] Cerberus :: System Configuration :: Global Configuration
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global Configuration, Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Configuration Files :: Variables :: Globally Invokable Variables
 ============================================================================================================
*/

$_GLOBAL_SERVER_CONFIGURATION_FILE					= "./System/Configuration/Global_Server_Configuration.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL			= "./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Standard.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL			= "./System/Configuration/Global_SQL_Server_Database_Class_MySQL_Improved.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL			= "./System/Configuration/Global_SQL_Server_Database_Class_Microsoft_Standard.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MINISQL		= "./System/Configuration/Global_SQL_Server_Database_Class_MiniSQL_Standard.php";
$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO			= "./System/Configuration/Global_SQL_Server_Database_Class_PDO.php";

if (file_exists($_GLOBAL_SERVER_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SERVER_CONFIGURATION_FILE";

} else {

	echo ("Kernel Message: Error, Missing File :: System :: Configuration :: Global Server Configuration File: $_GLOBAL_SERVER_CONFIGURATION_FILE");

} // [ + ] IF: File Exists: System File :: Configuration File: Global Server Configuration

/*
 ============================================================================================================
 +
 +
 + [ @ ] Configuration, Database Class Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 4, Include Specified Database Server Class File
 +
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "4") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 5, Include Specified Database Server Class File

/*
 ============================================================================================================
 +
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 5, Include Specified Database Server Class File
 +
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "5") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MYSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 5, Include Specified Database Server Class File

/*
 ============================================================================================================
 +
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 7, Include Specified Database Server Class File
 +
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "7") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: MySQL - Improved
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "1") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: MySQL - Improved

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: Microsoft SQL Server
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "2") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: Microsoft SQL Server

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: MiniSQL Server
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "3") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MINISQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MINISQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: MiniSQL Server

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: PDO
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "4") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: PDO

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 7, Include Specified Database Server Class File

/*
 ============================================================================================================
 +
 + IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 8, Include Specified Database Server Class File
 +
 ============================================================================================================
*/

if ($_ACCESS_PHP_ENGINE_VERSION == "8") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: MySQL - Improved
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "1") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_IMPROVED_MYSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: MySQL - Improved

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: Microsoft SQL Server
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "2") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: Microsoft SQL Server

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: MiniSQL Server
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "3") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MINISQL)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MSQL";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_MINISQL");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: MiniSQL Server

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Settings :: Is: PDO
 ============================================================================================================
*/

if ($_ACCESS_SQL_ENGINE_VERSION == "4") {

/*
 ============================================================================================================
 + IF: Global S.Q.L. Database Management System Server Database :: Class File: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO)) {

	include_once "$_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO";

} else {

	echo ("Kernel Message: Error, Missing File :: Database Management System Server Database :: Class File: $_GLOBAL_SQL_SERVER_DATABASE_CLASS_FILE_STANDARD_PDO");

} // [ + ] IF: File Exists: Database Management System Server Database: Class File

} // [ + ] IF: Structured-Database-Server-Query Database Management System Server Engine :: Settings :: Is: PDO

} // [ + ] IF: Pre-Hyper-Text-Post-Processor Engine Version Is: 8, Include Specified Database Server Class File

/*
 ============================================================================================================
 +
 +
 + [ @ ] Architect File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kernel File :: Variables :: Kernel File Name
 ============================================================================================================
*/

$_INTERNAL_ARCHITECT_NAME						= "Architect";
$_INTERNAL_FILE_ARCHITECT						= "Architect.php";
$_INTERNAL_FILE_ARCHITECT_DIRECTORY					= "Architect";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_USERNAME			= "Cerberus";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_ELECTRONIC_MAIL_ADDRESS	= "cerberus@local.host";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_ABOUT		= "Hi ! My name is Cerberus ! I am the Automated Root Administration-Level Account ! If you are an Administrator of this system you can send commands to me by Short-Message-Service ( S.M.S. ) Text Message, Multimedia-Message-Service ( M.M.S. ) Message, from your Registered Member Account by Instant Messenger Private Message or from the Terminal Interface in the Administration-Level Control Panel. If you have setup an SIP / VoIP Server on this Web Server you can connect a Phone Number to this account. I can receive and send Commands. I am always at your Command. You can Login and Authenticate into this account by using the default Administration Account Password that was set during the Installation of this system with Electronic Mail Address: Cerberus@Local.host";
$_INTERNAL_FILE_ARCHITECT_INSTALL_ROOT_ACCOUNT_PROFILE_SIGNATURE	= "I Guard The Entrance To Hades !";
$_INTERNAL_FILE_ARCHITECT_INSTALL_DIRECTORY_THEME_NAME			= "2023_Cerberus_White";
$_INTERNAL_FILE_ARCHITECT_INSTALL_DIRECTORY_THEME_VIDEO_RESOLUTION	= "720PI";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Kernel File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Kernel File :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kernel File :: Variables :: Kernel File :: Parameters
 ============================================================================================================
*/

$_INTERNAL_FILE_KERNEL							= "Cerberus.php";
$_INTERNAL_FILE_KERNEL_VERSION						= "6.01.0005.125";
$_INTERNAL_FILE_KERNEL_INTEGRITY					= hash_file('sha256', "$_INTERNAL_FILE_KERNEL");
$_INTERNAL_FILE_EXTENSION						= "cerberus";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Invokable Application Module :: Variables and Parameters
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Application Modules :: Variables :: Services, Root, Administration, Internal, Member, Public and Custom
 ============================================================================================================
*/

/*
 * For an additional layer of security you can change the values of these invokable Application Module variables
 * shown here to a completely random generated string by a random string generation variable. This will make it impossible
 * for an attacker to know the next string generated in the URL once the page executes again thereby making
 * it impossible to achieve any Cross-Site-Request GET and POST Forgery, Data Tampering or S.Q.L. Injection.
 */

$_INTERNAL_APPLICATION_MODULE_HTR_RANDOMIZATION_NUMBERS			= rand(10, 9999999);
$_INTERNAL_APPLICATION_MODULE_HTR_RANDOMIZATION_HASH			= md5("$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT.$_GLOBAL_REMOTE_SERVER_ADDRESS.$_GLOBAL_REMOTE_SERVER_PORT.$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MINUTES");

$_INTERNAL_APPLICATION_MODULE_SERVICES					= "Application_Services";
$_INTERNAL_APPLICATION_MODULE_ROOT					= "Application_Root";
$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR				= "Application_Administrator";
$_INTERNAL_APPLICATION_MODULE_INTERNAL					= "Application_Internal";
$_INTERNAL_APPLICATION_MODULE_MEMBER					= "Application_Member";
$_INTERNAL_APPLICATION_MODULE_MODERATOR					= "Application_Moderator";
$_INTERNAL_APPLICATION_MODULE_PUBLIC					= "Application_Public";
$_INTERNAL_APPLICATION_MODULE_CUSTOM					= "Application_Custom";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Maintenance File :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Maintenance File :: Diagnostics :: Variables :: Maintenance Files
 ============================================================================================================
*/

$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS					= "Asclepius.php";
$_INTERNAL_FILE_MAINTENANCE_REPAIR					= "Soteria.php";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Variables :: Versioning
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Software Versioning
 ============================================================================================================
*/

$_PROJECT_VERSION_SHORT							= "6.01.0005.125";
$_PROJECT_VERSION_EXTENDED						= "Cerberus Content Management System - Version Number: 6, Build Number: 01, Edit Number: 0,005 - Manual Edit Number: 125 ~ Titan - Saturday, April 19th of 2025";
$_PROJECT_VERSION_EDIT_NUMBER_GENERATED					= "0001";
$_PROJECT_VERSION_EDIT_NUMBER_MANUAL					= "0125";
$_PROJECT_VERSION_FILE_NUMBER						= "0.7.7";

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Software Project Strings
 ============================================================================================================
*/

$_PROJECT_STRING_LEGAL_COPYRIGHT					= "&copy; Tinke Software, G.C. Johnson Works 2000 - Present-Day";
$_PROJECT_STRING_LEGAL_ELECTRONIC_MAIL_ADDRESS				= "CerberusCMS6@Proton.me";
$_PROJECT_STRING_LEGAL_NAME_AUTHOR					= "G.C. Johnson";
$_PROJECT_STRING_NAME_EXTENDED						= "Cerberus Content Management System";
$_PROJECT_STRING_NAME_SHORT						= "Cerberus";
$_PROJECT_STRING_NAME_ROBOT_ELECTRONIC_MAIL				= "Cerberus";
$_PROJECT_STRING_NAME_UNIX						= "CerberusCMS";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Engine Version :: Parameters and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Software Project :: Web Server Technologies :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Software Project :: Globally Invokable Variables :: Web Server Technologies :: Variables
 ============================================================================================================
*/

$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION					= $_SERVER['SERVER_SOFTWARE'];
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_APACHE				= $_SERVER['SERVER_SOFTWARE'];
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_MYSQL				= $_SERVER['SERVER_SOFTWARE'];
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_OPERATING_SYSTEM		= php_uname();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_PHP				= phpversion();
$_PROJECT_WEB_SERVER_TECHNOLOGY_VERSION_PHP_ZEND			= zend_version();

/*
 ============================================================================================================
 + Software Project Parent Organization Official Name :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_DEVELOPER_STRING_NAME_SHORT					= "Tinke";
$_PROJECT_DEVELOPER_STRING_NAME_EXTENDED				= "Tinke Software";

/*
 ============================================================================================================
 + Software Project Parent Organization Official Servers :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_CLEARTEXT						= "http://www.CerberusCMS.com";
$_PROJECT_SERVER_URL_SECURE						= "https://www.CerberusCMS.com";
$_PROJECT_SERVER_URL_PARTIAL						= "CerberusCMS";

/*
 ============================================================================================================
 + Software Project Parent Organization Official GIT :: Globally Invokable Variables
 ============================================================================================================
*/

/*
 ======================
 + BITBucket
 ======================
*/

$_PROJECT_SERVER_URL_BITBUCKET_CLEARTEXT				= "http://www.BITBucket.com/CerberusCMS6";
$_PROJECT_SERVER_URL_BITBUCKET_SECURE					= "https://www.BITBucket.com/CerberusCMS6";

/*
 ======================
 + GITHub
 ======================
*/

$_PROJECT_SERVER_URL_GITHUB_CLEARTEXT					= "http://www.GITHub.com/CerberusCMS6";
$_PROJECT_SERVER_URL_GITHUB_SECURE					= "https://www.GITHub.com/CerberusCMS6";
$_PROJECT_SERVER_URL_SECURE_RAW_GITHUB					= "https://raw.GITHubUserContent.com/CerberusCMS6";

/*
 ======================
 + GITLab
 ======================
*/

$_PROJECT_SERVER_URL_GITLAB_CLEARTEXT					= "http://www.GITLab.com/CerberusCMS6";
$_PROJECT_SERVER_URL_GITLAB_SECURE					= "https://www.GITLab.com/CerberusCMS6";

/*
 ============================================================================================================
 + Software Project Parent Organization :: Official Software Project Hosting :: Globally Invokable Variables
 ============================================================================================================
*/

$_PROJECT_SERVER_URL_SOURCEFORGE_CLEARTEXT				= "http://www.SourceForge.net/projects/CerberusCMS6";
$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE					= "https://www.SourceForge.net/projects/CerberusCMS6";

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Software Project :: Variables :: Networking
 +
 +
 ============================================================================================================
*/

$_SYSTEM_SERVER_NETWORKING_RESOLVER_WHOIS				= "http://www.WhoIs.sc";
$_SYSTEM_SERVER_NETWORKING_RESOLVER_TIMESTAMP_UNIX_EPOCH		= "https://www.Timestamp-Converter.com";
?>
