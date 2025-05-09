﻿<?php
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
 +    ()  -  () - ---
 +  ()  () () () () ()
 +  ------
 + Kernel File
 + ----------------------------------------------------------------------------------------------------------
 + - This File, Location	 : Master Root Directory => Root Directory => Kernel
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
-============================================================================================================
-+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
-+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~()~~~~~~~~~~~~~~~~~~~~
-+---()-----()-()--()()()--()()()--()()()--()()()--()--------------------------------()--()------------------
-+-()--()---()()---()------()--()--()--()--()------()----------------------------------()--------------------
-+---()-----()-----()()----()()()--()--()--()()----()--------------------------------------------------------
-+----------()()---()------()()----()--()--()------()-----------------------/-\------------------------------
-+----------()-()--()()()--()--()--()--()--()()()--()()()-------------------|6|------------------------------
-+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Version~Number~\~/~~~Build~Number:~5.01.0005.125
-+~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~Edit~Number~:~125~~~~~~~~~~
-============================================================================================================
*/

/*
 ============================================================================================================
 * - This Kernel File Has Complete Control of Everything System-Wide -
 *
 * Refer to the programming code architecture documentation videos and portable-document
 * files for this project to get a good understanding of how the entire system works
 * as well as how to write programming code for this project. This entails
 * Application Modules, Application Panels, Custom Themes and more.
 *
 *
 *
 *
 * - Searchable Programming Architecture Keys -
 *
 * Search These Keys With The Text-Editor Application Search Function
 *
 * *** Logical ***
 * [ ^ ], Directory Document File Name and Directory Location
 * [ @ ], Header of Programming Code Systems and Programming Code Blocks
 * [ = ], Programming Code Statement IF With Description
 * [ & ], Programming Code Statement While With Description
 * [ < ], Programming Code Statement Else With Description
 * [ [ ], Programming Code Statement For With Description
 * [ + ], Programming Code Statement Ending With Description
 * [ C ], Programming Code Commented Out
 *
 * *** Logical Object-Oriented ***
 * =>, Ever-Changing Information Within Never-Changing Variables
 * ::, Index Section of Header
 *
 * *** One-Step Mathematical ***
 * [ Σ ], Mathematical Summation and Incrementation
 * [ Ξ ], Mathematical Difference and Decrement
 * :::, Index Section of Header
 * ->, Ever-Changing Information Within Never-Changing Variables
 *
 * *** Pre-Ordered Algebraic Mathematical ***
 * [ > ], Algebraic Statement Ending With Numeral
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 +
 +
 + [ ^ ] Root :: Kernel and Index File
 +
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
 + [ @ ] Internal :: File :: Redirection Systems
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Redirection :: Installation Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Installation :: File :: Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_INSTALLATION_FILE							= "Architect.php";

/*
 ============================================================================================================
 + IF: Global :: Installation :: File :: Exists, Redirect To It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_INSTALLATION_FILE)) {

	header("Location: Architect.php");
	exit;

} // [ + ] IF: File Exists: System Installation Application

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Configuration :: Files
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Configuration :: Global System Configuration Modules
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + DEFINE: Global :: System :: Configuration File :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_CONFIGURATION_FILE							= "./System/Configuration/Global_Configuration.php";

/*
 ============================================================================================================
 + IF: Global :: System :: Configuration File Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_CONFIGURATION_FILE)) {

	include_once "$_GLOBAL_SYSTEM_CONFIGURATION_FILE";

/*
 ============================================================================================================
 + ELSE: Global :: System :: Configuration File Does Not Exists, Print Error Message
 ============================================================================================================
*/

} else {

			echo ("Kernel Message: Error: System Configuration File Missing: $_GLOBAL_SYSTEM_CONFIGURATION_FILE | <A HREF=\"./Maintenance/Diagnostics/$_INTERNAL_FILE_MAINTENANCE_DIAGNOSTICS\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED :: Diagnostics Application ::\" TARGET=\"_NEW\">Press or Click Here To Execute The Diagnostics Application</A>");

} // [ + ] IF: File Exists: Configuration File :: Global System Configuration File

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Initializations
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Initializations :: Global :: Database Management System Objects, Functions and Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management System Server :: System :: Initialize Database Classes
 ============================================================================================================
*/

// [ C ] $DB										= new DB();

/*
 ============================================================================================================
 +
 +
 + Database Management System Server :: System :: Connect To :: Defined and Assigned Database Management System Server Details
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Management System Server :: System Connection :: Variables :: My Structured Query Language :: Standard
 ============================================================================================================
*/

// [ C ] $_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_CONNECT 				= mysql_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_HOSTNAME_PORT);
// [ C ] $_KERNEL_MYSQL_STANDARD_DATABASE_SERVER_DATABASE_NAME_SELECT 			= mysql_select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + Database Management System Server :: System Connection :: Variables :: My Structured Query Language :: Improved
 ============================================================================================================
*/

$_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT 					= new mysqli($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);
$_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_DATABASE_NAME_SELECT 				= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->select_db($_ACCESS_DATABASE_SERVER_DATABASE_NAME);

/*
 ============================================================================================================
 + IF: Specified Database Server Name Exists, Connect To It
 ============================================================================================================
*/

if ($_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT) {

/*
 ============================================================================================================
 + IF: Specified Database Server Database Name Exists, Select It
 ============================================================================================================
*/

if ($_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_DATABASE_NAME_SELECT) {

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: System :: Reporting :: MySQL Database Management System Server
 +
 +
 +
 ============================================================================================================
*/

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: System :: Variables :: Kernel
 +
 +
 +
 ============================================================================================================
*/
	
/*
 ============================================================================================================
 +
 +
 + [ @ ] Global :: System :: Variables :: System :: Settings :: Kernel
 +
 +
 ============================================================================================================
*/
	
/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: Kernel :: Installation
 ============================================================================================================
*/
	
$_DB_Query_Kernel_Select_System_Settings_Kernel_Installation				= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_kernel WHERE id='1'");
$_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array		= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation->fetch_array(MYSQLI_BOTH);

/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: Kernel :: Installation :: Parameters
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_INSTALLATION_DATE_INSTALLATION			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array['kernel_file_date_installation'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_INSTALLATION_FILE_INTEGRITY			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array['kernel_file_integrity'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_INSTALLATION_FILE_NAME				= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array['kernel_file_name'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_INSTALLATION_FILE_VERSION			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array['kernel_file_version'];
	
/*
 ============================================================================================================
 + Find :: Integrity :: File :: Kernel :: Installation
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_KERNEL_FILE_INTEGRITY_BACKUP_INSTALLATION				=  hash_file('sha256', "./System/Kernel/Backup/Kernel_Installation.kernel");

/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: Kernel :: Current
 ============================================================================================================
*/
	
$_DB_Query_Kernel_Select_System_Settings_Kernel_Current					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_kernel WHERE id='2'");
$_DB_Query_Kernel_Select_System_Settings_Kernel_Current_Fetch_Array			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Current->fetch_array(MYSQLI_BOTH);

/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: Kernel :: Current :: Parameters
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_CURRENT_DATE_INSTALLATION			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Current_Fetch_Array['kernel_file_date_installation'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_CURRENT_FILE_INTEGRITY				= $_DB_Query_Kernel_Select_System_Settings_Kernel_Current_Fetch_Array['kernel_file_integrity'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_CURRENT_FILE_NAME				= $_DB_Query_Kernel_Select_System_Settings_Kernel_Current_Fetch_Array['kernel_file_name'];
$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_CURRENT_FILE_VERSION				= $_DB_Query_Kernel_Select_System_Settings_Kernel_Current_Fetch_Array['kernel_file_version'];
	
/*
 ============================================================================================================
 + Find :: Integrity :: File :: Kernel :: Backup :: Current
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_KERNEL_FILE_INTEGRITY_BACKUP_CURRENT					=  hash_file('sha256', "./System/Kernel/Backup/Current.kernel");
	
/*
 ============================================================================================================
 +
 +
 + [ @ ] Global :: System :: Variables :: Global System Settings :: System-Wide
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: System-Wide
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_System_Settings						= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_settings WHERE id='1'");
$_DB_Query_Kernel_Select_System_Settings_Fetch_Array					= $_DB_Query_Kernel_Select_System_Settings->fetch_array(MYSQLI_BOTH);

/*
 ============================================================================================================
 + Global :: System :: Settings: Plug-Ins
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Audio
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_AUDIO							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_audio'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_AUDIO							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_audio'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Camera
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_CAMERA							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_camera'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_CAMERA							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_camera'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Encryption
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_ENCRYPTION						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_encryption'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_ENCRYPTION						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_encryption'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_LOCATION						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_location'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_LOCATION							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_location'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Microphone
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_MICROPHONE						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_microphone'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_MICROPHONE						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_microphone'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Notifications
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_NOTIFICATIONS						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_notifications'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_NOTIFICATIONS						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_notifications'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Safe-HTML
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_SAFEHTML						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_safeHTML'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_SAFEHTML							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_safeHTML'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Secure-Delete
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_SECURE_DELETE						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_secure_delete'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_SECURE_DELETE						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_secure_delete'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Text-Editor
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_TEXT_EDITOR						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_text_editor'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_TEXT_EDITOR						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_text_editor'];
	
/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Time
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_TIME							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_time'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_TIME							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_time'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Plug-Ins :: Video
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_VIDEO							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_video'];
$_GLOBAL_SYSTEM_PLUGIN_STATUS_VIDEO							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_status_video'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Cookies :: Cookie Lifetime
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_COOKIE_TIME								= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_time_cookies'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Web Page :: Output :: Data Compression
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_STATUS_GZIP								= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_status_embedded_compression_gzip'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Image Extensions
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_IMAGE_EXTENSION								= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_file_extension_image'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Languages
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_directory_language'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Smileys
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SMILEYS_DIRECTORY							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_plugin_directory_smileys'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Offline Mode Status
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_STATUS_OFFILINE_MODE							= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_status_offline_mode'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Web Browser Site Title
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SITE_TITLE								= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_website_title'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Sound Extension
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SOUND_EXTENSION								= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_file_extension_audio'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Graphical User Interface, Theme Directory and Theme Video Resolution
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME						= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_directory_theme'];
$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_directory_theme_video_resolution'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: File Upload Size
 ============================================================================================================
*/
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_CATEGORIES					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_file_categories'];

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_AUDIO					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_audio'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_DOCUMENT					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_document'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_IMAGE					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_image'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_VIDEO					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_video'];

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_STREAMS_AUDIO				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_streams_audio'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_STREAMS_DOCUMENT				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_streams_document'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_STREAMS_IMAGE				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_streams_image'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PRIVATE_MEMBER_STREAMS_VIDEO				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_private_member_streams_video'];

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MEDIA_PLAYER_AUDIO				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_media_player_audio'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MEDIA_PLAYER_VIDEO				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_media_player_video'];

$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MESSENGER_AUDIO					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_messenger_audio'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MESSENGER_DOCUMENT				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_messenger_document'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MESSENGER_IMAGE					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_messenger_image'];
$_GLOBAL_SYSTEM_UPLOAD_SIZE_PUBLIC_FILE_MESSENGER_VIDEO					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_upload_size_public_messenger_video'];
	
/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: Internet Protocol Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_SECURITY_ACCOUNT_REGISTRATION_AGE_REQUIREMENT			= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_account_registration_age_requirement'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: Internet Protocol Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_account_restrict_ip'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: Web Browser User-Agent String
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_WEB_BROWSER		= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_account_restrict_web_browser'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Authentication :: MAC Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_MAC_ADDRESS		= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_account_restrict_mac_address'];

/*
 ============================================================================================================
 + Global :: System :: S.Q.L. Settings: Registered Member Account :: Device :: Authentication :: Multi-Factor :: Internet Protocol Address
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_DEVICE_AUTHENTICATION_MULTIFACTOR_IP		= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_device_multifactor_ip'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Global :: System :: Security :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global :: System :: Security :: Variables :: System-Wide
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: System :: Security :: Settings :: Security Module :: Master Sanitization
 ============================================================================================================
*/

$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_STATUS_MASTER_SANITIZATION			= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_module_status_sanitization'];
$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_DIRECTORY_MASTER_SANITIZATION			= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_module_directory_sanitization'];

/*
 ============================================================================================================
 + Global :: System :: Security :: Settings :: Security Protocols :: Cache Circumvention
 ============================================================================================================
*/

$_GLOBAL_SETTING_SYSTEM_SECURITY_SETTING_STATUS_CACHE_CIRCUMVENTION			= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_security_cache_server'];

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Pure
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS					= rand(0,9999999999);

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Hashed
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_MD5				= hash('md5',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1				= hash('sha1',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA256			= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA512			= hash('sha512',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS);
$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_OF_SHA1_OF_SHA256		= hash('sha256',$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_HASH_SHA1);

/*
 ============================================================================================================
 + Global :: Security :: Variables :: Random Number Generators :: Mersenne Twister
 ============================================================================================================
*/

$_GLOBAL_SECURITY_RANDOM_NUMBER_GENERATOR_URL_DIGITS_MERSENNE_TWISTER			= mt_rand(0,9999999999);

/*
 ============================================================================================================
 +
 + Global :: System :: Services :: Variables :: System-Wide
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: System :: Security :: Settings :: Security Module :: Master Sanitization
 ============================================================================================================
*/

$_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_COMMANDER				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_services_module_status_commander'];
$_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_INTEGRITY				= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_services_module_status_integrity'];
$_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_LOOPS					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_services_module_status_loops'];
$_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_SERVICES					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_services_module_status_services'];
$_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_TASKS					= $_DB_Query_Kernel_Select_System_Settings_Fetch_Array['settings_system_services_module_status_tasks'];

/*
 ============================================================================================================
 + Database Server Query: Retrieve :: System :: Settings :: Kernel :: Installation :: Parameters
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SETTINGS_KERNEL_BACKUP_INSTALLATION_DATE_INSTALLATION			= $_DB_Query_Kernel_Select_System_Settings_Kernel_Installation_Fetch_Array['kernel_file_date_installation'];

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Global :: Cookie :: Variables
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Global :: Cookie :: Variables :: Non-Registered Visitor
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Cookie :: Variables :: Non-Registered Visitor :: Directory :: Theme
 ============================================================================================================
*/

$_GLOBAL_COOKIE_DIRECTORY_THEME								= $_COOKIE['kernel_visitor_directory_theme'];

/*
 ============================================================================================================
 + Global :: Cookie :: Variables :: Non-Registered Visitor :: Directory :: Theme :: Video Resolution
 ============================================================================================================
*/

$_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION					= $_COOKIE['kernel_visitor_directory_theme_video_resolution'];

/*
 ============================================================================================================
 +
 + Global :: Cookie :: Variables :: Registered Member Account
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS						= $_COOKIE['kernel_member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Password
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_PASSWORD								= $_COOKIE['kernel_member_password'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: UserName
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_USERNAME								= $_COOKIE['kernel_member_username'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Member Language
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_LANGUAGE								= $_COOKIE['kernel_member_language'];

/*
 ============================================================================================================
 + Global :: Member :: Cookie :: Variables :: Member Account :: Member String :: Digital Fingerprint
 ============================================================================================================
*/

$_GLOBAL_COOKIE_MEMBER_SECURITY_FINGERPRINT						= $_COOKIE['kernel_member_security_fingerprint'];

/*
 ============================================================================================================
 +
 + Global :: Registered Member Account :: Settings :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: UserName Cookie and Password Cookie Are Not Null, Retrieve Details
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Fetch Database Stored Member Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Member_Credentials 						= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");
$_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array 				= $_DB_Query_Kernel_Select_Member_Credentials->fetch_array(MYSQLI_BOTH);

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Priviledge Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCESS_LEVEL								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_access_level'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Web Browser :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_web_browser'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Web Browser :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER_AUTHORIZED					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_web_browser_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: MAC Address :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_mac_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: MAC Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS_AUTHORIZED					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_account_device_mac_address_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Location :: Device :: Global-Positioning-System Coordinates
 ============================================================================================================
*/
	
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_HTML_GPS_X					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_html_gps_x'];
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_HTML_GPS_Y					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_html_gps_y'];
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_HTML_GPS_Z					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_html_gps_z'];
	
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_PHP_GPS_X					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_php_gps_x'];
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_PHP_GPS_Y					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_php_gps_y'];
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_PHP_GPS_Z					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_php_gps_z'];
	
/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Location :: Device :: Geographical-Localization-Objects
 ============================================================================================================
*/
	
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_GLO						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_glo'];
	
/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Location :: Device :: Region and TimeZone
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_REGION						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_region'];
$_GLOBAL_MEMBER_ACCOUNT_DEVICE_LOCATION_TIMEZONE					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_device_timezone'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Location :: Given
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ACCOUNT_GIVEN_LOCATION_AREA						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_given_area'];
$_GLOBAL_MEMBER_ACCOUNT_GIVEN_LOCATION_REGION						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_given_region'];
$_GLOBAL_MEMBER_ACCOUNT_GIVEN_LOCATION_TIMEZONE						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_location_given_timezone'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account :: Authentication :: Attempt Number
 ============================================================================================================
*/
	
$_GLOBAL_MEMBER_ATTEMPT_AUTHENTICATION							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_attempt_authentication'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account :: Lock Status
 ============================================================================================================
*/
	
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LOCKED							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_locked'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Account Activation
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVATION						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_activation'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Active
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_ACTIVE							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_active'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Status :: Last Active Timestamp
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_TIMESTAMP					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_timestamp'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_TIMESTAMP_UNIX				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_unix'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_YEAR						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_years'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MONTH					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_months'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MONTH_DAY					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_days'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_HOURS					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_hours'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_MINUTES					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_minutes'];
$_GLOBAL_MEMBER_STATUS_ACCOUNT_LAST_ACTIVE_SECONDS					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_last_active_seconds'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Avatar Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_AVATAR								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_avatar'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Banned Status
 ============================================================================================================
*/

$_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_status_account_banned'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Electronic Mail Address
 ============================================================================================================
*/

$_GLOBAL_MEMBER_ELECTRONIC_MAIL_ADDRESS							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_electronic_mail_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Experience Amount
 ============================================================================================================
*/

$_GLOBAL_MEMBER_EXPERIENCE_AMOUNT							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_experience_amount'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Account Gender
 ============================================================================================================
*/

$_GLOBAL_MEMBER_GENDER									= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_gender'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Language
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Account Sexual Orientation
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SEXUAL_ORIENTATION							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_social_preference_sexual_orientation'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Language
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LANGUAGE								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_language'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Referrer :: Last Known Referrer
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LAST_REFERRER								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_last_referrer'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Number of Posts
 ============================================================================================================
*/

$_GLOBAL_MEMBER_NUMBER_OF_POSTS								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_number_of_posts'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Personal Profile Image
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IMAGE_PROFILE								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_picture'];
	
/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Personal Video Profile Image
 ============================================================================================================
*/
	
$_GLOBAL_MEMBER_IMAGE_VIDEO_PROFILE							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_image_video'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Rank Level
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_level_rank'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Member Account Theme Directory
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_settings_theme_directory'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Current
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_CURRENT							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Last Authentication
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_DEVICE				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_device'];
$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_LOCAL				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_local'];
$_GLOBAL_MEMBER_IP_ADDRESS_LAST_AUTHENTICATION_SERVER_REMOTE				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_last_authentication_server_remote'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED							= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_authorized'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Authorized
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED_MULTIFACTOR					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_authorized_multifactor'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Authentication :: Authorization :: Security Token
 ============================================================================================================
*/

$_GLOBAL_MEMBER_AUTHENTICATION_AUTHORIZATION_SECURITY_TOKEN				= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_authorization_token'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Internet Protocol Address :: Log
 ============================================================================================================
*/

$_GLOBAL_MEMBER_IP_ADDRESS_LOG								= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_ip_address_log'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Security :: Digital Fingerprint
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_fingerprint_cleartext'];
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED						= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_fingerprint_hashed'];

/*
 ============================================================================================================
 + Global :: Member Account :: Settings :: Variables :: Security :: Setting :: Flag :: Force Logout
 ============================================================================================================
*/

$_GLOBAL_MEMBER_SECURITY_SETTING_FLAG_FORCE_LOGOUT					= $_DB_Query_Kernel_Select_Member_Credentials_Fetch_Array['member_security_setting_flag_force_logout'];

/*
 ============================================================================================================
 +
 + Check For :: Banned Registered Member Account Status
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Banned Status :: Is: Active, Redirect To The Banned Message ( 1 ), Or ELSEWHERE
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_STATUS_ACCOUNT_BANNED >= 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Is: Banned

} // [ + ] IF: Registered Member Account :: Is: Logged-In

/*
 ============================================================================================================
 +
 + Global :: Date, Time, TimeZone, Region and Referrer :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Timezone
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL					= date("T-Z");
$_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE					= date("");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Region
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL					= date("");
$_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE					= date("");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Standard
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_STANDARD							= date("l, F j, Y g:i:s A");
$_GLOBAL_LOCAL_SERVER_DATE_RFC								= date("r");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL						= date("Y");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_SHORT						= date("y");
	
/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Week of Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_WEEK_OF_YEAR_FULL					= date("W");

	
/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Day of Year
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_DAY_OF_YEAR_FULL					= date("z");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Month
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_FULL						= date("m");
$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT					= date("n");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_DAY_FULL					= date("d");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Year :: Month :: Day
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_FULL						= date("Y-m-d");
$_GLOBAL_LOCAL_SERVER_DATE_TIME_NUMERICAL_FULL						= date("Y-m-d-g-i-s");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_HOURS							= date("g");
$_GLOBAL_LOCAL_SERVER_TIME_MINUTES							= date("i");
$_GLOBAL_LOCAL_SERVER_TIME_SECONDS							= date("s");
$_GLOBAL_LOCAL_SERVER_TIME_AM_PM							= date("A");
$_GLOBAL_LOCAL_SERVER_TIME_MILLISECONDS							= $_GLOBAL_LOCAL_SERVER_TIME_SECONDS * 1000;
$_GLOBAL_LOCAL_SERVER_TIME_MICROSECONDS							= $_GLOBAL_LOCAL_SERVER_TIME_SECONDS * 1000000;
$_GLOBAL_LOCAL_SERVER_TIME_HOURS_MINUTES_SECONDS					= date("g-i-s");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Time :: Internet Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_INTERNET							= date("B");

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Time :: MicroTime and Unix-Epoch Time
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_TIME_MICROTIME							= microtime();
$_GLOBAL_LOCAL_SERVER_TIME_UNIX								= time();
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_CONVERTED_TO_LOCAL					= gmdate("l, F j, Y g:i:s A", $_GLOBAL_LOCAL_SERVER_TIME_UNIX);

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Date :: Time :: MicroTime :: Divisions
 ============================================================================================================
*/

/**
 * Almost all of the computer programming math functions are bullshit. All of the real mathematics needs to be manually programmed with PEMDAS methods. This entire block needs to be perfected.
 * It will probably take me about a week to write out all of the programming code here because Unix-Epoch Time is bullshit and Unix-Epoch Time only half-way works.
*/

$_GLOBAL_LOCAL_SERVER_TIME_UNIX_SECONDS							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX;
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_MINUTES							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX / 60;
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_HOURS							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX_MINUTES / 60;
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_DAYS							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX_HOURS / 24;
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_MONTHS							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX_DAYS * 12;
$_GLOBAL_LOCAL_SERVER_TIME_UNIX_YEARS							= $_GLOBAL_LOCAL_SERVER_TIME_UNIX / 31536000;

$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_YEARS						= $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL - 1970;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_MONTHS						= $_GLOBAL_LOCAL_SERVER_TIME_UNIX_YEARS * 12 - $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_MONTH_SHORT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_DAYS						= $_GLOBAL_LOCAL_SERVER_TIME_UNIX_MONTHS / 365;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_HOURS						= $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_DAYS * 24;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_MINUTES						= $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_HOURS * 60;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_SECONDS						= $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_MINUTES * 60;

$_GLOBAL_LOCAL_SERVER_DATE_TIME_YEAR_SECONDS						= 60 * 60 * 24 * 365;

$mathcurrent	= $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL - 1970;
$mathx		= 60 * 60 * 24 * 365 * $mathcurrent;
$mathy		= 60 * 60 * 24 * 365;

$mathz		= $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL * 

// Epoch-Time :: Number of Seconds :: Non-Leap Year
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT				= $_GLOBAL_LOCAL_SERVER_DATE_NUMERICAL_YEAR_FULL - 1970 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_YEAR_SECONDS;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS					= 60 * 60 * 24 * 365 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_MONTHS				= 60 * 60 * 24 * 365 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_DAYS					= 60 * 60 * 24 * 365 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_HOURS					= 60 * 60 * 24 * 365 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_MINUTES				= 60 * 60 * 24 * 365 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;
$_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_SECONDS				= 31536000 * $_GLOBAL_LOCAL_SERVER_DATE_TIME_UNIX_EPOCH_MANUAL_YEARS_CURRENT;

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Hyper-Text-Transfer-Protocol :: Referrer
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];

/*
 ============================================================================================================
 +
 + Global :: Remote Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_REMOTE_SERVER_ADDRESS								= $_SERVER['REMOTE_ADDR'];
$_GLOBAL_REMOTE_SERVER_ADMIN								= $_SERVER['REMOTE_ADMIN'];
$_GLOBAL_REMOTE_SERVER_HOSTNAME								= $_SERVER['REMOTE_HOST'];
$_GLOBAL_REMOTE_SERVER_PORT								= $_SERVER['REMOTE_PORT'];
$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];
$_GLOBAL_REMOTE_USER									= $_SERVER['REMOTE_USER'];
//$_GLOBAL_REMOTE_SERVER_LOCATION_REGION						= geoip_region_by_name('$_GLOBAL_REMOTE_SERVER_ADDRESS');

/*
 ============================================================================================================
 +
 + Global :: Local Server :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Global :: Local Server :: Variables :: Connection :: Machine Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_GATEWAY_INTERFACE							= $_SERVER['GATEWAY_INTERFACE'];
$_GLOBAL_LOCAL_SERVER_ADDRESS								= $_SERVER['SERVER_ADDR'];
$_GLOBAL_LOCAL_SERVER_PORT								= $_SERVER['SERVER_PORT'];
$_GLOBAL_LOCAL_SERVER_NAME								= $_SERVER['SERVER_NAME'];
$_GLOBAL_LOCAL_SERVER_SOFTWARE								= $_SERVER['SERVER_SOFTWARE'];
$_GLOBAL_LOCAL_SERVER_PROTOCOL								= $_SERVER['SERVER_PROTOCOL'];
$_GLOBAL_LOCAL_SERVER_SIGNATURE								= $_SERVER['SERVER_SIGNATURE'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Request Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_REQUEST_METHOD							= $_SERVER['REQUEST_METHOD'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME							= $_SERVER['REQUEST_TIME'];
$_GLOBAL_LOCAL_SERVER_REQUEST_TIME_FLOAT						= $_SERVER['REQUEST_TIME_FLOAT'];
$_GLOBAL_LOCAL_SERVER_QUERY_STRING							= $_SERVER['QUERY_STRING'];
$_GLOBAL_LOCAL_SERVER_DOCUMENT_ROOT							= $_SERVER['DOCUMENT_ROOT'];
$_GLOBAL_LOCAL_SERVER_DIRECTORY_CURRENT							= dirname($_SERVER['PHP_SELF']);
$_GLOBAL_LOCAL_SERVER_DIRECTORY_FILE_CURRENT						= $_SERVER['PHP_SELF'];

/*
 ============================================================================================================
 + Global :: Remote Server :: Variables :: Connection :: Hyper-Text-Transfer-Protocol Information
 ============================================================================================================
*/

$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT							= $_SERVER['HTTP_ACCEPT'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_CHARACTER_SET						= $_SERVER['HTTP_ACCEPT_CHARSET'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_ENCODING						= $_SERVER['HTTP_ACCEPT_ENCODING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LOADING						= $_SERVER['HTTP_ACCEPT_LOADING'];
$_GLOBAL_LOCAL_SERVER_HTTP_ACCEPT_LANGUAGE						= $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$_GLOBAL_LOCAL_SERVER_HTTP_CONNECTION_TYPE						= $_SERVER['HTTP_CONNECTION'];
$_GLOBAL_LOCAL_SERVER_HTTP_HOST								= $_SERVER['HTTP_HOST'];
$_GLOBAL_LOCAL_SERVER_HTTP_REFERRER							= $_SERVER['HTTP_REFERER'];
$_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT							= $_SERVER['HTTP_USER_AGENT'];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Globals :: Functions
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Global :: Function :: Delete :: Directory :: Recursively
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Function :: Delete :: Directory :: Recursively : Global_Directory_Delete_Recursively
 ============================================================================================================
*/

function Global_Directory_Delete_Recursively($Kernel_Global_Directory_Delete_Recursively) {

/*
 ============================================================================================================
 + IF: File Exists: Imaginary Directory, Return True
 ============================================================================================================
*/

if (!file_exists($Kernel_Global_Directory_Delete_Recursively)) {

	return true;

} // [ + ] IF: File Exists: Imaginary :: Directory

/*
 ============================================================================================================
 + IF: IS Directory: Imaginary Directory
 ============================================================================================================
*/

if (!is_dir($Kernel_Global_Directory_Delete_Recursively)) {

	return unlink($Kernel_Global_Directory_Delete_Recursively);

/*
 ============================================================================================================
 + FOR EACH: Imaginary Directory Contents Scanned Within The Imaginary Directory
 ============================================================================================================
*/

foreach (scanddir($Kernel_Global_Directory_Delete_Recursively) as $Kernel_Global_Directory_Delete_Recursively_Item) {

/*
 ============================================================================================================
 + IF: Internal Security :: STOP :: Exploit :: Remote-File-Inclusion AND Local-File-Inclusion
 ============================================================================================================
*/

if ($Kernel_Global_Directory_Delete_Recursively_Item == '.' || $Kernel_Global_Directory_Delete_Recursively_Item == '..') {

/*
 ============================================================================================================
 + IF: NOT Delete Directory :: Imaginary Directory Contents, Return False
 ============================================================================================================
*/

if (!delete_directory($Kernel_Global_Directory_Delete_Recursively_Item . DIRECTORY_SEPARATOR . $Kernel_Global_Directory_Delete_Recursively_Item)) {

	return false;

} // [ + ] IF: NOT :: Global_Directory_Delete_Recursively, Return False

} // [ + ] IF: STOP :: Exploit :: Remote-File-Inclusion AND Local-File-Inclusion

/*
 ============================================================================================================
 + AFTER: Recursively Deleting Each Imaginary File Within The Imaginary Directory, Remove The Imaginary Directory Itself
 ============================================================================================================
*/

	return rmdir($Kernel_Global_Directory_Delete_Recursively);

} // [ + ] FOREACH: Scan Directory Contents :: OF :: Imaginary Directory :: AS :: The Imaginary Files

} // [ + ] IS Directory: Imaginary Directory

} // [ + ] FUNCTION: Global Delete Directory Recursively :: Imaginary Directory

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Security :: Application Modules
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Global :: System :: Security :: Application Module :: Master Sanitization
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Global :: System :: Security :: Setting :: Master Sanitization :: Status :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_STATUS_MASTER_SANITIZATION >= 1) {

/*
 ============================================================================================================
 + DEFINE: Global :: System :: Security :: File: Master Sanitization :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION					= "./System/Security/Module/Sanitization/$_GLOBAL_SETTING_SYSTEM_SECURITY_MODULE_DIRECTORY_MASTER_SANITIZATION/Sanitization.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 + IF: Global :: System :: Security :: File: Master Sanitization :: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION)) {

	include_once "$_GLOBAL_SYSTEM_SECURITY_MODULE_FILE_MASTER_SANITIZATION";

/*
 ============================================================================================================
 + ELSE: Global :: System :: Security :: File: Master Sanitization :: Does Not Exists, Print Error Message
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Security :: Module :: File :: Sanitization :: Master Sanitization");

} // [ + ] IF: Include: Global :: System :: Security :: Module :: File :: Sanitization :: File: Master Sanitization

} // [ + ] IF: Global :: System :: Security :: Setting :: Master Sanitization :: Status :: Is: On OR Off

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Services :: Modules
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Services :: Module :: Commander
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: Status: Commander :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_COMMANDER >= "1") {

/*
 ============================================================================================================
 + DEFINE: Internal :: Services :: Module :: File: Commander :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_COMMANDER								= "./System/Services/Commander";

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: File: Commander :: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_COMMANDER)) {

	include_once "$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_COMMANDER";

/*
 ============================================================================================================
 + ELSE: Internal :: Services :: Module :: File: Commander :: Does Not Exists, Print Error Message
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Services :: Module :: File: Commander");

} // [ + ] IF: Include: Global :: System :: Services :: Module :: File: Commander :: Exists, Include It

} // [ + ] IF: Include: Global :: System :: Services :: Module :: Status: Commander :: Is: On

/*
 ============================================================================================================
 +
 +
 + Internal :: Services :: Module :: Integrity
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: Status: Integrity :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_INTEGRITY >= "1") {

/*
 ============================================================================================================
 + DEFINE: Internal :: Services :: Module :: File: Integrity :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_INTEGRITY								= "./System/Services/Integrity";

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: File: Integrity :: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_INTEGRITY)) {

	include_once "$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_INTEGRITY";

/*
 ============================================================================================================
 + ELSE: Internal :: Services :: Module :: File: Integrity :: Does Not Exists, Print Error Message
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Services :: Module :: File: Integrity");

} // [ + ] IF: Include: Global :: System :: Services :: Module :: File: Integrity :: Exists, Include It

} // [ + ] IF: Include: Global :: System :: Services :: Module :: Status: Integrity :: Is: On

/*
 ============================================================================================================
 +
 +
 + Internal :: Services :: Module :: Loops
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: Status: Loops :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_LOOPS >= "1") {

/*
 ============================================================================================================
 + DEFINE: Internal :: Services :: Module :: File: Loops :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_LOOPS								= "./System/Services/Loops";

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: File: Loops :: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_LOOPS)) {

	include_once "$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_LOOPS";

/*
 ============================================================================================================
 + ELSE: Internal :: Services :: Module :: File: Loops :: Does Not Exists, Print Error Message
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Services :: Module :: File: Loops");

} // [ + ] IF: Include: Global :: System :: Services :: Module :: File: Loops :: Exists, Include It

} // [ + ] IF: Include: Global :: System :: Services :: Module :: Status: Loops :: Is: On

/*
 ============================================================================================================
 +
 +
 + Internal :: Services :: Module :: Services
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: Status: Services :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_SERVICES >= "1") {

/*
 ============================================================================================================
 + DEFINE: Internal :: Services :: Module :: File: Services :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_SERVICES								= "./System/Services/Services";

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: File: Services :: Exists, Include It
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_SERVICES)) {

	include_once "$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_SERVICES";

/*
 ============================================================================================================
 + ELSE: Internal :: Services :: Module :: File: Services :: Does Not Exist, Print Error Message
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Services :: Module :: File: Services");

} // [ + ] IF: Include: Global :: System :: Services :: Module :: File: Services :: Exists, Include It

} // [ + ] IF: Include: Global :: System :: Services :: Module :: Status: Services :: Is: On

/*
 ============================================================================================================
 +
 +
 + Internal :: Services :: Module :: Tasks
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: Status: Tasks :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SETTING_SYSTEM_SERVICES_MODULE_STATUS_TASKS >= "1") {

/*
 ============================================================================================================
 + DEFINE: Internal :: Services :: Module :: File: Tasks :: File Name and Location
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_TASKS								= "./System/Services/Tasks";

/*
 ============================================================================================================
 + IF: Internal :: Services :: Module :: File: Tasks :: Does Not Exists, Print Error Message
 ============================================================================================================
*/

if (file_exists($_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_TASKS)) {

	include_once "$_GLOBAL_SYSTEM_SERVICES_MODULE_FILE_TASKS";

/*
 ============================================================================================================
 + ELSE: Internal :: Services :: Module :: File: Tasks :: Does Not Exists, Include It
 ============================================================================================================
*/

} else {

	echo ("Kernel: Message: Error :: Missing :: System :: Services :: Module :: File: Tasks");

} // [ + ] IF: Include: Global :: System :: Services :: Module :: File: Tasks :: Exists, Include It

} // [ + ] IF: Include: Global :: System :: Services :: Module :: Status: Tasks :: Is: On

/*
 ============================================================================================================
 +
 +
 + Internal Security :: Registered Member Account :: Device :: Restriction :: Web Browser
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: System :: Setting :: Restrict :: Authorized :: Web Browser :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_WEB_BROWSER == "1") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Authorized Web Browser User-Agent String :: IS NOT :: Current Web Browser User-Agent String :: Force Logout
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCOUNT_DEVICE_WEB_BROWSER_AUTHORIZED != "$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To :: Registered Member Account :: Force Logout Message :: Web Browser :: User-Agent String
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogoutUserAgent&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Session :: Authorized Web Browser String IS NOT Current Web Browser String :: Force Logout

} // [ + ] IF: System :: Security :: Setting :: Restrict :: Authorized :: Web Browser: Is: On

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal Security :: Registered Member Account :: Device :: Restriction :: MAC Address
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: System :: Setting :: Restrict :: Authorized :: Web Browser :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_MAC_ADDRESS == "1") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Authorized MAC Address :: IS NOT :: Current MAC Address :: Force Logout
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCOUNT_DEVICE_MAC_ADDRESS_AUTHORIZED != "$_GLOBAL_REMOTE_DEVICE_MAC_ADDRESS") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To :: Registered Member Account :: Force Logout Message :: MAC Address
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogoutMACAddress&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Session :: Authorized MAC Address IS NOT Current MAC Address String :: Force Logout

} // [ + ] IF: System :: Security :: Setting :: Restrict :: Authorized :: MAC Address: Is: On

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Registered Member Account :: Session :: Force Logout
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Security :: Setting :: Flag :: Force Logout :: Is: On
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_SECURITY_SETTING_FLAG_FORCE_LOGOUT == "1") {

/*
 ============================================================================================================
 + Database Server Query :: Update :: Registered Member Account :: Security :: Setting :: Force Logout
 ============================================================================================================
*/

$_DB_Query_Kernel_Security_Update_Member_Account_Force_Logout			= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_security_setting_flag_force_logout='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

/*
 ============================================================================================================
 + IF: Database Server Query :: Update :: Registered Member Account :: Security :: Setting :: Force Logout
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Security_Update_Member_Account_Force_Logout) {

/*
 ============================================================================================================
 + Redirect To :: Registered Member Account :: Force Logout Message :: Forced Logout Flag
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Database Server Query :: Update :: Registered Member Account :: Security :: Setting :: Force Logout

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To Registered Member Account Locked Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=ForcedLogout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Security :: Setting :: Flag :: Force Logout Is: On

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Member Account :: Session :: Automatically Logout Locked Accounts
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_STATUS_ACCOUNT_LOCKED > "0") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);

/*
 ============================================================================================================
 + Redirect To Registered Member Account Locked Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountLocked&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account :: Locked Status Is: On, At Any Time: Destroy Credentials In Cookies and Redirect To Account Locked Message

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Man-In-The-Middle :: Local Server Cache and Remote Web Browser Cache :: Circumvention
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: Uniform-Resource-Location
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 		= 100;

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringHTR($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING					= '';

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_INDEX				= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING					.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: HTR :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING;

} // [ + ] Function: getRandomStringHTR

/*
 ============================================================================================================
 + Cache HTR :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringHTR($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION			= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: Audio
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringAudio($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_INDEX				= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING				.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Audio :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING;

} // [ + ] Function: getRandomStringAudio

/*
 ============================================================================================================
 + Cache Audio :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringAudio($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATION			= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_AUDIO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: Document
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringDocument($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_CHARACTERS	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_INDEX			= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING				.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Document :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING;

} // [ + ] Function: getRandomStringDocument

/*
 ============================================================================================================
 + Cache Document :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringDocument($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATION			= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_DOCUMENT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: Image
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringImage($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS	= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING			= '';

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_INDEX			= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING			.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Image :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING;

} // [ + ] Function: getRandomStringImage

/*
 ============================================================================================================
 + Cache Image :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringImage($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATION			= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_IMAGE_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: Video
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringVideo($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_INDEX					= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING					.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: Video :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING;

} // [ + ] Function: getRandomStringVideo

/*
 ============================================================================================================
 + Cache Video :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH		= hash('sha512',getRandomStringVideo($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATION				= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_VIDEO_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: MITM :: Server Cache :: Circumvention :: Hyper-Text Reference :: File Inclusion
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: Variables :: Random Generator Length Number
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER 	= 100;

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: Random String Function
 ============================================================================================================
*/

function getRandomStringFileInclusion($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: Random String Variables
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS		= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING				= '';

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_INVISIBLE = 0; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_INVISIBLE < $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: Randomize Generated Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_INDEX				= rand(0, strlen($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING				.= $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_CHARACTERS[$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_INDEX];

} // [ + ] Function: Random Character Generator :: File Inclusion :: Increment Invisible String

return $_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING;

} // [ + ] Function: getRandomStringFileInclusion

/*
 ============================================================================================================
 + Cache File Inclusion :: Circumvention :: HASH Algorithm of Randomized Strings
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH	= hash('sha512',getRandomStringFileInclusion($_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Global Security :: Variables :: Uniform Resource Location Addition
 ============================================================================================================
*/

$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATION			= "$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASH&amp;CacheCircumvention";

/*
 ============================================================================================================
 +
 + Internal Security :: Fake Cookies Versus Real Data :: Registered Member Account :: UserName AND Password
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Check For Valid Registered Member Account Credentials With Current Credential Cookies
 ============================================================================================================
*/

$_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password 					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_password='$_GLOBAL_COOKIE_MEMBER_PASSWORD'");
$_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password_Number_Of_Rows			= $_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password->num_rows;

/*
 ============================================================================================================
 + IF: Credential Cookie Data Stored In The Web Browser Match The Database Management System Server Database Entry Exactly
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password_Number_Of_Rows == "1") {
/**
 * Do Nothing
**/

/*
 ============================================================================================================
 + ELSE: Credential Cookie Data Stored In The Web Browser Does Not Match The Database Management System Server Database Entry, Force Logout
 ============================================================================================================
*/

} else {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Fake Data Found In Credential Cookies - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Database Server Query :: Check The Registered Member Account Data In The Browser Cookies AND Compare That Data To The Registered Member Account Database Management System Server Database Entry

/*
 ============================================================================================================
 + Kill: Database Server Query: Compare Registered Member Account Database Management System Server Database Entry To Stored Cookies
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Security_Check_Cookie_Member_UserName_AND_Password->free_result();

} // [ + ] IF: Check :: Registered Member Account :: Credentials :: UserName AND Password

/*
 ============================================================================================================
 +
 + Internal Security :: Fake Cookies Versus Real Data :: Registered Member Account :: Electronic Mail Address
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Check For Valid Credentials
 ============================================================================================================
*/

$_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address 					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address_Number_Of_Rows			= $_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address->num_rows;

/*
 ============================================================================================================
 + IF: Cookie Data Stored In Browser Matches The Database Management System Server Database Entry Exactly
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address_Number_Of_Rows == "1") {
/**
 * Do Nothing
**/

/*
 ============================================================================================================
 + ELSE: Cookie Data Stored In Browser Does Not Match The Database Management System Server Database Entry, Force Logout
 ============================================================================================================
*/

} else {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Fake Data Found In Cookies - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Database Server Query :: Check The Registered Member Account Data In The Browser Cookies AND Compare That Data To The Registered Member Account Database Management System Server Database Entry

/*
 ============================================================================================================
 + Kill: Database Server Query: Compare Registered Member Account Database Management System Server Database Entry To Stored Cookies
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Security_Check_Cookie_Member_Electronic_Mail_Address->free_result();

} // [ + ] IF: Check :: Registered Member Account :: Credentials :: UserName AND Electronic Mail Address

/*
 ============================================================================================================
 +
 +
 + Internal Security :: Stored Browser Cookies Versus Real Physical Directories and Files
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: Check For :: Real Registered Member Account :: Directory AND Files :: Index
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Use Existing Registered Member Account UserName Cookie To Search For Physical Member Directory
 ============================================================================================================
*/

$_MEMBER_DIRECTORY_INDEX_FILE								= "./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/index.html";

/*
 ============================================================================================================
 + IF: UserName String Found In Registered Member Account UserName Cookie Does Not Match Physical Directory and File
 ============================================================================================================
*/

if (!file_exists($_MEMBER_DIRECTORY_INDEX_FILE)) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Fake Data Found - Redirect To Logout Section
	exit;

/*
 ============================================================================================================
 + ELSE: UserName String Found In Registered Member Account UserName Cookie Does Match The Physical Directory and File, Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] File Does Not Exist: Member Directory Index :: Force Logout

} // [ + ] IF: Registered Member Account UserName and Registered Member Account Password Cookie Check

/*
 ============================================================================================================
 +
 + Internal Security :: Check For :: Real Registered Member Account :: Directory AND Files :: Electronic Mail Address File
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Use Existing Registered Member Account UserName Cookie To Search For Physical Member Directory
 ============================================================================================================
*/

$_MEMBER_DIRECTORY_MASTER_LIST_ELECTRONIC_MAIL_ADDRESS_FILE					= "./Member/Master_List/Electronic_Mail_Addresses/$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS";

/*
 ============================================================================================================
 + IF: File DOES NOT Exist: Master List :: Electronic Mail Addresses :: Registered Member Account :: Electronic Mail Address File
 ============================================================================================================
*/

if (!file_exists($_MEMBER_DIRECTORY_MASTER_LIST_ELECTRONIC_MAIL_ADDRESS_FILE)) {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Fake Data Found - Redirect To Internal Application: Logout
	exit;

/*
 ============================================================================================================
 + ELSE: File DOES Exist: Master List :: Electronic Mail Addresses :: Registered Member Account :: Electronic Mail Address File, Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] File Does Not Exist: Member Directory :: Master List :: Electronic Mail Addresses :: Registered Member Account Electronic Mail Address File :: Force Logout

} // [ + ] IF: Cookie Check :: Registered Member Account UserName, Registered Member Account Password and Registered Member Account Electronic Mail Address

/*
 ============================================================================================================
 +
 + Internal Security :: Registered Member Account :: Fingerprint AS Session :: Compare Fingerprint Cookie To Database Server Entry
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal Security :: Check For Banished, Blocked and Filtered Network Addresses
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Select :: All Network Entries :: WHERE :: Entries ARE Current Internet Protocol Address
 ============================================================================================================
*/

$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks				= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_networking WHERE blocked_ip_address_string='$_GLOBAL_REMOTE_SERVER_ADDRESS' ORDER BY id ASC");
$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Fetch_Array			= $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks->fetch_array(MYSQLI_BOTH);
$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Number_of_Rows		= $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks->num_rows;

/*
 ============================================================================================================
 + WHILE: Retrieving :: All Network Entries :: WHERE Entries ARE Current Internet Protool Address :: From The Database Management System Server Database
 ============================================================================================================
*/

$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_IPA_String			= $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Fetch_Array['blocked_ip_address_string'];
$_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Redirect_URL		= $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Fetch_Array['blocked_redirect_url'];

/*
 ============================================================================================================
 + IF: Current Internet Protocol Address :: Matches :: Blocked Internet Protocol Addresses String
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Number_of_Rows >= "1") {

	echo ("Kernel Message: Blocked Network Address Found: $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_IPA_String :: Is: $_GLOBAL_REMOTE_SERVER_ADDRESS :: Redirecting To: $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Redirect_URL");

	header("Refresh:10; $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks_Redirect_URL"); // Banished Internet Protocol Address Found - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Check :: Current Connected Internet Protocol Address :: To :: Blocked Interet Protocol Address String :: In The Database Management System Server Database

/*
 ============================================================================================================
 + Kill: Database Server Query: SELECT :: Networking :: Blocked Networks
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Networking_Status_Security_Check_Blocked_Networks->free_result();

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: User-Agent :: Check For Empty and Null Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Web Browser :: User-Agent :: String :: Is: Empty Data
 ============================================================================================================
*/

if ($_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT == "") {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Web Browser :: User-Agent :: Empty Data Found - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Web Browser :: User-Agent :: Is Null: Redirect

/*
 ============================================================================================================
 + UF: Web Browser :: User-Agent :: String :: Is: Null Data
 ============================================================================================================
*/

if ($_GLOBAL_LOCAL_SERVER_HTTP_USER_AGENT == null) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Web Browser :: User-Agent :: Null Data Found - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Web Browser :: User-Agent :: Is Null: Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: User-Agent :: Check For Spoofed User-Agent String
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Web Browser :: User-Agent :: String :: Tampered OR Altered User-Agent String
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: User-Agent :: String :: Is NOT Null
 ==========================================================================
*/

if ($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT != null) {

$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY	= "$_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT";

/*
 ==========================================================================
 + IF: Web Browser :: User-Agent :: String :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY,"<") == 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Web Browser :: User-Agent :: String :: Is Tampered - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Tampered: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: User-Agent :: String :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY,">") == 1) {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Web Browser :: User-Agent :: String :: Is Tampered - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Tampered: > :: Filter String and Redirect

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is NOT Null

/*
 ==========================================================================
 + IF: Web Browser :: User-Agent :: String :: Is Empty
 ==========================================================================
*/

if ($_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY == "") {

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Banned.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Web Browser :: User-Agent :: String :: Is Null - Redirect To Internet Protocol Address and Network Banishment Notification
	exit;

} // [ + ] IF: Web Browser :: User-Agent :: String :: Is Empty

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: Language -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Language
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE == ".." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "." || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "@" || $_GLOBAL_COOKIE_MEMBER_LANGUAGE == "`") {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,"<") == 1) {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,">") == 1) {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,"`") == 1) {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_LANGUAGE,".") == 1) {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Language :: String :: Is Tampered, Containing: . :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: UserName -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: UserName
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME == ".." || $_GLOBAL_COOKIE_MEMBER_USERNAME == "." || $_GLOBAL_COOKIE_MEMBER_USERNAME == "@" || $_GLOBAL_COOKIE_MEMBER_USERNAME == "`") {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,"<") == 1) {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,">") == 1) {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,"`") == 1) {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_USERNAME,".") == 1) {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: UserName :: String :: Is Tampered, Containing: . :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: Password -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Password
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_PASSWORD == ".." || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "." || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "@" || $_GLOBAL_COOKIE_MEMBER_PASSWORD == "`") {

	setcookie("kernel_member_password", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,"<") == 1) {

	setcookie("kernel_member_password", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,">") == 1) {

	setcookie("kernel_member_password", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_PASSWORD,"`") == 1) {

	setcookie("kernel_member_password", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Password :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: Electronic Mail Address -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Registered Member Account :: Cookie :: Electronic Mail Address
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == ".." || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "." || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "@" || $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS == "`") {

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,"<") == 1) {

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,">") == 1) {

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS,"`") == 1) {

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: Electronic Mail Address :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: Theme Directory -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Non-Registered Visitor :: Web Browser :: Cookie :: Directory :: Theme
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_DIRECTORY_THEME == ".." || $_GLOBAL_COOKIE_DIRECTORY_THEME == "." || $_GLOBAL_COOKIE_DIRECTORY_THEME == "@" || $_GLOBAL_COOKIE_DIRECTORY_THEME == "`") {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME,"<") == 1) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME,">") == 1) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME,"`") == 1) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Check :: Cookie :: Tampered Data :: Local-File-Inclusion, Remote-File-Inclusion, S.Q.L. Injection
 + - Cookie: Theme Directory Video Resolution -
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Check :: Non-Registered Visitor :: Web Browser :: Cookie :: Directory :: Theme :: Video Resolution
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION == ".." || $_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION == "." || $_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION == "@" || $_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION == "`") {

	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit and Escaping Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Theme :: Video Resolution :: String :: Is Exploit Data, Redirect To Logout

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Video Resolution :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION,"<") == 1) {

	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: Video Resolution :: String :: Is Tampered, Containing: < :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Video Resolution :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION,">") == 1) {

	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: Video Resolution :: String :: Is Tampered, Containing: > :: Filter String and Redirect

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Directory :: Theme :: Video Resolution :: Contains Programming Code OR Exploit Code
 ==========================================================================
*/

if (substr_count($_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION,"`") == 1) {

	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION"); // Exploit Programming Code Found - Redirect To Logout Section, Destroy All Cookies
	exit;

} // [ + ] IF: Non-Registered Visitor :: Cookie :: Directory :: Theme :: Video Resolution :: String :: Is Tampered, Containing: ` :: Filter String and Redirect

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: Language -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Language :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_LANGUAGE) >= "15") {

	setcookie("kernel_member_language", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Language :: Character Length Data Is Greater Than OR Equal To 15 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: UserName -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: UserName :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_USERNAME) >= "25") {

	setcookie("kernel_member_username", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: UserName :: Character Length Data Is Greater Than OR Equal To 15 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: Password -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Password :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_PASSWORD) >= "256") {

	setcookie("kernel_member_password", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Password :: Character Length Data Is Greater Than OR Equal To 256 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: Electronic Mail Address -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS) >= "100") {

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Electronic Mail Address :: Character Length Data Is Greater Than OR Equal To 100 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: Theme Directory -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_DIRECTORY_THEME) >= "100") {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Directory :: Theme :: Character Length Data Is Greater Than OR Equal To 100 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + Internal Security :: Web Browser :: Cookie :: String :: Enforce String Character Length Limitations
 + - Cookie: Theme Directory Video Resolution -
 ============================================================================================================
*/

/*
 ==========================================================================
 + IF: Web Browser :: Cookie :: String :: Electronic Mail Address :: String :: Character Length
 ==========================================================================
*/

if (strlen($_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION) >= "100") {

	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_INTERNAL=Logout&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Registered Member Account :: Cookie :: String :: Directory :: Theme :: Video Resolution :: Character Length Data Is Greater Than OR Equal To 100 Characters: Instantly Destroy Cookies, Sessions and Logout

/*
 ============================================================================================================
 +
 + System :: Plug-In :: Location :: Directives
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: The Location Plug-In Is On, Include It
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_LOCATION >= 1) {

	include_once "./System/Plug-Ins/Location/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_LOCATION/Location.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 + ELSE: The Location Plug-In Is Off, Print Message
 ============================================================================================================
*/

} else {

	$_GLOBAL_SYSTEM_PLUGIN_LOCATION_MESSAGE_DEACTIVATED				= "<CENTER>Kernel Message: The Location Plug-In Application Module Is: De-Activated</CENTER>";

} // [ + ] IF: System :: Plug-In :: Location :: Is: On or Off

/*
 ============================================================================================================
 +
 + System :: Plug-In :: Safe Hyper-Text-Markup-Language :: Directives
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: The Safe-Hyper-Text-Markup-Language Plug-In Is On, Include It
 ===========================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_SAFEHTML >= 1) {

	include_once "./System/Plug-Ins/Safe-HTML/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_SAFEHTML/Safe-HTML.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 + ELSE: The Safe-Hyper-Text-Markup-Language Plug-In Is Off, Print Message
 ===========================================================================================================
*/

} else {

	$_GLOBAL_PLUGIN_SAFEHTML_LIST_COMMANDS						= "<CENTER>Kernel Message: The Safe-HTML Plug-In Application Module Is: De-Activated</CENTER>";

} // [ + ] IF: System :: Plug-In :: Safe-HTML :: Is: On or Off

	include_once "./System/Plug-Ins/Watermark/Default/Watermark.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Loops
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Directory and File :: Loop :: Change Mode ( CHMOD ) Permissions Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 * 0777 :: Read, Write and Execute
 * 0600 :: Read and Write To Directory and Files. Execution Forbidden
 * 0666 :: Read and Write To Directory and Files. Execution Forbidden - Alternate Change-Mode File System
 * 000x :: Executable File
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Permissions :: Change-Mode :: Directory :: Upload
 ============================================================================================================
*/

$_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_FIND_DIRECTORY_UPLOAD				= "Upload";
$_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_OPEN_DIRECTORY_UPLOAD				= opendir($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_FIND_DIRECTORY_UPLOAD);
$_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_VALUE_DIRECTORY_UPLOAD				= "0666";

/*
 ============================================================================================================
 + Read :: Directory :: Upload :: Files
 ============================================================================================================
*/

while (($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_READ_DIRECTORY_UPLOAD = readdir($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_OPEN_DIRECTORY_UPLOAD))) {

/*
 ============================================================================================================
 + IF: Internal Security :: STOP :: Local-File-Inclusion AND Remote-File-Inclusion Exploits
 ============================================================================================================
*/

if ($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_READ_DIRECTORY_UPLOAD_FILES == ".." || $_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_READ_DIRECTORY_UPLOAD_FILES == "." || $_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_READ_DIRECTORY_UPLOAD_FILES == "index.php") {
/**
 * Skip These Files
**/

/*
 ============================================================================================================
 + ELSE: Change-Mode :: Permissions :: Directory and Files :: Upload
 ============================================================================================================
*/

} else {

	//chmod("$_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_FIND_DIRECTORY_UPLOAD", octdec($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_VALUE_DIRECTORY_UPLOAD));
	chmod("$_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_READ_DIRECTORY_UPLOAD_FILES", octdec($_KERNEL_INTERNAL_LOOP_PERMISSIONS_CHANGEMODE_VALUE_DIRECTORY_UPLOAD));

} // [ + ] IF: STOP :: Exploit :: Remote-File-Inclusion AND Local-File-Inclusion

} // [ + ] Else: Set :: Permissions :: Change-Mode :: Directory :: Upload :: Files

/*
 ============================================================================================================
 +
 + System Settings :: Loop :: Registered Member Account :: Set System Theme Directory and Theme Video Resolution
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Theme Directory Is Empty, Set System Theme Directory
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME == "") {

$_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME								= $_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME;

} // [ + ] IF: Registered Member Account :: Setings :: Theme Directory Settings Is Empty

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Theme Directory Is NOT Null, Set System Theme Directory To Registered Member Account Directory
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME != null) {

$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME								= $_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME;

} // [ + ] IF: Registered Member Account :: Settings :: Theme Directory Settings Is Null

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Theme :: IS: Null or Empty String: SET Member Theme Directory Settings To: Global System Theme Directory
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME == "") {

$_GLOBAL_MEMBER_SETTINGS_DIRECTORY_THEME								= $_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME;

} // [ + ] IF: Registered Member Account :: Settings :: Theme :: IS: Null or Empty String: SET Member Theme Directory Settings To: Global System Theme Directory

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 + System Settings :: Loop :: Non-Registered Visitor :: Set System-Wide Cookie Specified Theme Details IF: Non-Registered Visitor Cookie Specified Theme Is: NOT Null
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Non-Registered Visitor :: Settings :: Cookie :: Theme :: Directory :: Is: NOT Null, Change Theme Directory and Theme Video Resolution
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_DIRECTORY_THEME != null) {

$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME								= $_GLOBAL_COOKIE_DIRECTORY_THEME;
$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION						= $_GLOBAL_COOKIE_DIRECTORY_THEME_VIDEO_RESOLUTION;

} // [ + ] IF: Non-Registered Visitor :: Settings :: Cookie :: Theme :: Directory :: IS: Set, Change Theme Directory and Theme Video Resolution

/*
 ============================================================================================================
 +
 + Registerd Member Account :: Loop :: Gender
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 0, Non-Specified
 ============================================================================================================
*/

if (($_GLOBAL_MEMBER_GENDER <= "0") || ($_GLOBAL_MEMBER_GENDER == "-")) {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Non-Specified";

} // [ + ] IF: Registered Member Account :: Gender Is: 0 OR -, Define as Non-Specified

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 1, Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Male";

} // [ + ] IF: Registered Member Account :: Gender Is: 1, Define as Male

/*
 ============================================================================================================
 + IF: Registered Member Account :: Gender Is: 2, Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

	$_GLOBAL_MEMBER_GENDER_DISPLAY	= "Female";

} // [ + ] IF: Registered Member Account :: Gender Is: 1, Define as Female

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Rank
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Gender :: Is: 1, Female
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "1") {

/*
 ============================================================================================================
 + Update :: Registered Member Account :: Rank :: Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "1";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "2";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To: 100

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "3";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than Less Than OR Equal To: 500

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "4";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1000

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "5";

} // [ + ] IF: IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1500

} // [ + ] IF: Registered Member Account :: Gender :: Is: 1, Female

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Gender :: Is: 2, Male
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "2") {

/*
 ============================================================================================================
 + Update :: Registered Member Account :: Rank :: Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "6";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "7";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To: 100

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "8";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than Less Than OR Equal To: 500

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "9";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1000

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "10";

} // [ + ] IF: IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1500

} // [ + ] IF: Registered Member Account :: Gender :: Is: 2, Male

/*
 ============================================================================================================
 + IF: Registered Member Account :: Settings :: Gender :: Is: 0 OR -, Non-Disclosed
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_GENDER == "0" || $_GLOBAL_MBMER_GENDER == "-") {

/*
 ============================================================================================================
 + Update :: Registered Member Account :: Rank :: Based On Experience Amount
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS <= 50) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 50

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 100
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 100) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To: 100

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than Less Than OR Equal To: 500

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To: 1000
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1000) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "0";

} // [ + ] IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1000

/*
 ============================================================================================================
 + IF: Registered Member Account :: Number of Posts :: Are Less Than OR Equal To 1500
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_NUMBER_OF_POSTS >= 1500) {

	$_Kernel_Member_Rank_Level_Update_Digit	= "0";

} // [ + ] IF: IF: Registered Member Account :: Number of Posts :: Are Greater Than OR Equal To 1500

} // [ + ] IF: Registered Member Account :: Gender :: Is: 0, Non-Disclosed

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Update :: Registered Member Account Rank
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Update :: Registered Member Account :: Rank
 ============================================================================================================
*/

$_DB_Query_Kernel_Update_Member_Rank 							= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_level_rank='$_Kernel_Member_Rank_Level_Update_Digit' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME'");

/*
 ============================================================================================================
 + IF: Database Management System Server :: Database :: Query :: Update :: Registered Member Account :: Rank
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Update_Member_Rank) {
/**
 * Do Nothing
**/

/*
 ============================================================================================================
 + ELSE: Database Management System Server :: Database :: Query :: Update :: Registered Member Account :: Rank :: Error :: Print Message
 ============================================================================================================
*/

} else {

										echo ($_Message_Kernel_ERROR_SQL_RANK);

} // [ + ] IF: Database Server Query :: Update :: Registered Member Account Rank

/*
 ============================================================================================================
 + Kill: Database Server Query: Update :: Registered Member Account :: Rank
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Update_Member_Rank->free_result();

} // [ + ] IF: Registered Member Account :: Is: Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 +
 + Global :: Registered Member Account :: Rank :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Select :: All Ranks
 ============================================================================================================
*/

$_DB_Query_Kernel_Member_Rank_Select_All_Ranks						= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_ranks ORDER BY id ASC");

while ($_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array = $_DB_Query_Kernel_Member_Rank_Select_All_Ranks->fetch_array(MYSQLI_BOTH)) {

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Gender :: Female
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_0						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_1						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_2						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_3						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_4						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_female_4'];

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female
 ============================================================================================================
*/

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 0
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "1") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_0";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 1

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 1
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "2") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_1";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 2

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 2
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "3") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_2";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 3

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 3
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "4") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_3";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 4

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Female :: Rank 4
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "5") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_FEMALE_4";

} // [ + ] IF: Registered Member Account :: Female :: Member Rank Level Is: 5

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Gender :: Male
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_0'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_1'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_2'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_3'];
$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4						= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_male_4'];

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male
 ============================================================================================================
*/

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 0
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "6") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_0";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 6

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 1
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "7") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_1";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 7

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 2
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "8") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_2";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 8

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 3
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "9") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_3";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 9

/*
 =======================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Male :: Rank 4
 =======================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "10") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_MALE_4";

} // [ + ] IF: Registered Member Account :: Male :: Member Rank Level Is: 10

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: Gender :: Non-Specified
 ============================================================================================================
*/

$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0					= $_DB_Query_Kernel_Member_Rank_Select_All_Ranks_Fetch_Array['rank_gender_none'];

/*
 ============================================================================================================
 + Set :: Registered Member Account :: Rank Variables :: For Display :: Non-Specified
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_LEVEL_RANK == "0") {

	$_GLOBAL_MEMBER_LEVEL_RANK_DISPLAY = "$_GLOBAL_MEMBER_LEVEL_RANK_GENDER_NON_SPECIFIED_0";

} // [ + ] IF: Male Member Rank Level Is: 0

} // [ + ] WHILE: Retrieving Registered Member Account Rank Level Names

/*
 ============================================================================================================
 + Kill: Database Server Query: Select All Ranks
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Member_Rank_Select_All_Ranks->free_result();

} // [ + ] IF: Registered Member Account :: Is Logged-In With Valid Credentials

/*
 ============================================================================================================
 +
 + Registered Member Account :: Loop :: Specified Language Cookie Loop
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Registered Member Account :: Cookie :: Language Is Set => Set The System Language String To The Language Cookie String
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_LANGUAGE != null) {

$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY							= $_GLOBAL_COOKIE_MEMBER_LANGUAGE;

} // [ + ] IF: Language Cookie Is NOT Null, Set System Configured Language To The Language Cookie String

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Security :: Digital Fingerprinting
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Security :: Digital Fingerprinting :: Registered Member Account :: Generator
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal :: Security :: Digital Fingerprinting :: Registered Member Account :: Generator :: Random :: String
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Variables :: Digital Fingerprinting :: Registered Member Account :: Generator :: Random :: Length Number
 ============================================================================================================
*/

$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER					= "200";

/*
 ============================================================================================================
 + Function :: FingerprintGetRandomString
 ============================================================================================================
*/

function FingerprintGetRandomString($_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER) {

/*
 ============================================================================================================
 + Variables :: Digital Fingerprinting :: Registered Member Account :: Generator :: Random :: Characters
 ============================================================================================================
*/

$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_CHARACTERS					= '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING								= '';

/*
 ============================================================================================================
 + FOR: Variable < 0 Variable Increment
 ============================================================================================================
*/

for ($_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_INVISIBLE = 0; $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_INVISIBLE < $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER; $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_INVISIBLE++) {

/*
 ============================================================================================================
 + Variables :: Digital Fingerprinting :: Registered Member Account :: Generator :: Random :: Characters :: Randomize Characters AND Starting Index
 ============================================================================================================
*/

$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_INDEX							= rand(0, strlen($_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_CHARACTERS) - 1);
$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING								.= $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_CHARACTERS[$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_INDEX];

} // [ + ] Function: FingerprintGetRandomString :: Random Character Generator :: Increment AND Randomize Characters

return $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING;

} // [ + ] Function: FingerprintGetRandomString

/*
 ============================================================================================================
 + Variables :: Digital Fingerprinting :: Registered Member Account :: Generator :: Random :: Characters :: Randomized Characters :: HASHED
 ============================================================================================================
*/

$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASHED				= hash('sha512',FingerprintGetRandomString($_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER));

/*
 ============================================================================================================
 + Variables :: Digital Fingerprinting :: Registered Member Account :: Generated :: Fingerprint
 ============================================================================================================
*/

$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_GENERATED								= "$_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_RANDOM_STRING_GENERATOR_LENGTH_NUMBER_HASHED&amp;DigitalFingerprint";

/*
 ============================================================================================================
 +
 +
 + Digital Fingerprinting :: Non-Registered Visitor and Registered Member Account
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Valid Registered Member Account Credential Data In Browser Cookies Is Found, Define Member Digital Fingerprint
 ============================================================================================================
*/

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS			= $_SERVER['REMOTE_ADDR'];
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT			= $_SERVER['REMOTE_PORT'];
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME				= date("Y-m-j-g-i-s-A-u");
$_INTERNAL_SECURITY_GENERATED_MEMBER_COOKIE_FINGERPRINT_STRING_DATE_TIME			= date("Y-m-j-g-i-s-A-u-B");
$_INTERNAL_SECURITY_GENERATED_MEMBER_COOKIE_FINGERPRINT_STRING_RANDOM_NUMBER			= rand(1000000,9999999);

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS		= strlen($_GLOBAL_REMOTE_SERVER_ADDRESS);
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME			= strlen($_GLOBAL_COOKIE_MEMBER_USERNAME);
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD			= strlen($_GLOBAL_COOKIE_MEMBER_PASSWORD);

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT					= "$_GLOBAL_COOKIE_MEMBER_USERNAME ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT ::: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_GENERATED";
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_HASHED						= hash('sha512', $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT);

$_INTERNAL_SECURITY_GENERATED_COOKIE_MEMBER_FINGERPRINT_HASHED					= hash('sha512', $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT.$_INTERNAL_SECURITY_GENERATED_MEMBER_COOKIE_FINGERPRINT_STRING_RANDOM_NUMBER.$_INTERNAL_SECURITY_GENERATED_MEMBER_COOKIE_FINGERPRINT_STRING_DATE_TIME);

/*
 ============================================================================================================
 + ELSE: Check For Valid Registered Member Account Credential Data In Browser Cookies :: Credentials DO NOT Exist
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + No Valid Registered Member Account Credential Data In Browser Cookies Is Found, Define Visitor Digital Fingerprint
 ============================================================================================================
*/

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS			= $_SERVER['REMOTE_ADDR'];
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT			= $_SERVER['REMOTE_PORT'];
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME				= date("Y-m-j-g-i-s-A");

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS		= strlen($_GLOBAL_REMOTE_SERVER_ADDRESS);
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME			= strlen("Visitor");
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD			= strlen("Visitor");

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT					= "Non-Registered Visitor ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT ::: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_USERNAME ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_MEMBER_PASSWORD ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_GENERATED";
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_HASHED						= hash('sha512', $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT);

$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT			= "$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_REMOTE_SERVER_PORT ::: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_LENGTH_REMOTE_SERVER_ADDRESS ::: $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_STRING_DATE_TIME ::: $_INTERNAL_SECURITY_DIGITAL_FINGERPRINT_GENERATED";
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED				= hash('sha512', $_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_CLEARTEXT);

} // [ + ] IF: Registered Member Account Is: Logged-In OR Is: Non-Registered Visitor

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Applications
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Login
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Internal Application :: Login :: Is Activated
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Login") {

/*
 ============================================================================================================
 +
 + Internal Application :: Login Form :: Variables :: Post Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: Electronic Mail Address
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR				= $_POST['IAM_Login_Electronic_Mail_Address'];

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: Password
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_PASSWORD_CLEAR					= $_POST['IAM_Login_Password'];

/*
 ============================================================================================================
 + Internal Security => Sanitize :: Post Data :: UserName
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= $_POST['IAM_Login_UserName'];

/*
 ============================================================================================================
 + Internal Security => Convert Electronic Mail Address String To LowerCase String
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR				= strtolower($_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR);

/*
 ============================================================================================================
 + Internal Security => Convert UserName String To LowerCase String With UpperCase First Character
 ============================================================================================================
*/

$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= strtolower($_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR);
$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR					= ucfirst($_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR);

/*
 ============================================================================================================
 +
 + Internal Security :: Login :: Check Post Data To Database Server Stored Data
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query: Check Database Entries For Registered Member Account With Provided Credentials
 ============================================================================================================
*/

$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials 					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR' AND member_electronic_mail_address='$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR'");
$DB_Query_Kernel_Authenticate_Check_Member_Account_Entry_Number_Of_Rows				= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials->num_rows;

/*
 ============================================================================================================
 + IF: Database Management System :: Database :: Server :: Query: Check Database For Existing Registered Member Account With Provided Credentials
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Entry_Number_Of_Rows == "1") {

/*
 ============================================================================================================
 + Fetch Real Registered Member Account Data From Database Server Entries
 ============================================================================================================
*/

$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array					= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials->fetch_array(MYSQLI_BOTH);
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_UserName					= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_username'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Electronic_Mail_Address			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_electronic_mail_address'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password					= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_password'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Active			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_status_account_active'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Locked			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_status_account_locked'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication			= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_attempt_authentication'];
$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Device_Authentication_MultiFactor_IP	= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Fetch_Array['member_ip_address_authorized_multifactor'];

/*
 ============================================================================================================
 + IF: Registered Member Account :: Status :: Active :: Redirect To Active Account Message
 ============================================================================================================
*/
	
if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Active >= "1") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountActive&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Registered Member Account :: Status :: Inactive :: Check Internet Protocol Address
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Device :: Authentication :: Authorized :: Internet Protocol Address IS NOT Current Internet Protocol Address, Logout
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Device_Authentication_MultiFactor_IP != "$_GLOBAL_REMOTE_SERVER_ADDRESS") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Authorization=IP_Address&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Registered Member Account :: Device :: Authentication :: IS NOT Authorized :: Internet Protocol Address IS NOT Current Internet Protocol Address :: Check For Account Lock
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Registered Member Account Status Is: Locked, Redirect To Member Account Locked Message
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Status_Account_Locked >= "1") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AccountLocked&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Registered Member Account Status Is: NOT Locked :: Check For Account Authentication Attempt Number
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Registered Member Account Authentication Attempt Is: Greater Than Or Equal To 5, Redirect To Member Account Locked Message
 ============================================================================================================
*/

if ($DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication >= "5") {

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=AuthenticationAttempt&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Registered Member Account Authentication Attempt Is: Less Than 5, Verify Password
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Posted Clear-Text Password -> Encrypted Password String Is The Exact Encrypted Password String Stored In The Database Server, Verify The Password
 ============================================================================================================
*/

if (password_verify($_Kernel_Authenticate_Member_Account_POST_PASSWORD_CLEAR, $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password)) {

/*
 ============================================================================================================
 + The Registered Member Account Password Has Been Verified Exactly, Set All Valid Credential Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "$_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_password", "$DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Password", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_username", "$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_member_security_fingerprint", "$_INTERNAL_SECURITY_GENERATED_COOKIE_MEMBER_FINGERPRINT_HASHED", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Private :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME				= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log_Private.php", "a");
$_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH				= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Public :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME				= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log_Public.php", "a");
$_Kernel_Member_Account_Authentication_Log_Public_TIMESTAMP_HASH				= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write :: Registered Member Account :: Authentication Log :: Private :: Write Authentication Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME, "
::: Kernel Message :::
---------------------------------------------------------------------------------------
This Registered Member Account Successfully Authenticated: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
Server :: This Web Server
* Timestamp :: Authentication :: Device :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: This Web Server :: Standard Time: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: This Web Server :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Connecting Device
* Timestamp :: Authentication :: Device :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: Connecting Device :: Standard Time: $_GLOBAL_REMOTE_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: Connecting Device :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Security :: Digital Fingerprint
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Generated :: Clear-Text:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT

* Digital Fingerprint :: Unique :: Generated :: HASHED:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED

* Digital Fingerprint :: Unique :: From Database Management System Server :: Clear-Text:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

* Digital Fingerprint :: Unique :: From Database Management System Server :: HASHED:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Connection Information
---------------------------------------------------------------------------------------
Server :: Connecting Device :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: Connecting Device: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Device :: Connecting Device :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT

Server :: This Web Server :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Device :: This Web Server :: Connecting Port Number: $_GLOBAL_LOCAL_SERVER_PORT
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Location
---------------------------------------------------------------------------------------
Global Positioning System Coordinates
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

Geographical Localization of Objects
* Location :: Device :: This Web Server :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Location :: Device :: Connecting Device :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO

Time-Zone
* Location :: Device :: This Web Server :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE

Region
* Location :: Device :: This Web Server :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Web Browser
---------------------------------------------------------------------------------------
* Connecting Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Write :: Registered Member Account :: Authentication Log :: Public :: Write Authentication Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME, "
::: Kernel Message :::
---------------------------------------------------------------------------------------
This Registered Member Account Successfully Authenticated: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
Server :: This Web Server
* Timestamp :: Authentication :: Device :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: This Web Server :: Standard Time: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: This Web Server :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Connecting Device
* Timestamp :: Authentication :: Device :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: Connecting Device :: Standard Time: $_GLOBAL_REMOTE_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: Connecting Device :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Security :: Digital Fingerprint
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Generated :: Clear-Text:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT

* Digital Fingerprint :: Unique :: Generated :: HASHED:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED

* Digital Fingerprint :: Unique :: From Database Management System Server :: Clear-Text:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

* Digital Fingerprint :: Unique :: From Database Management System Server :: HASHED:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Connection Information
---------------------------------------------------------------------------------------
Server :: Connecting Device :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: Connecting Device: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Device :: Connecting Device :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT

Server :: This Web Server :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Device :: This Web Server :: Connecting Port Number: $_GLOBAL_LOCAL_SERVER_PORT
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Location
---------------------------------------------------------------------------------------
Global Positioning System Coordinates
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

Geographical Localization of Objects
* Location :: Device :: This Web Server :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Location :: Device :: Connecting Device :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO

Time-Zone
* Location :: Device :: This Web Server :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE

Region
* Location :: Device :: This Web Server :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Web Browser
---------------------------------------------------------------------------------------
* Connecting Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Authentication Log :: Private
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Authentication Log :: Public
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Authentication_Log_Public_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + The Registered Member Account Password Has Been Verified and Set Exactly: Set Registered Member Account Last Login Internet Protocol Address To Current
 ============================================================================================================
*/

$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote	= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_remote='$_GLOBAL_REMOTE_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local	= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_local='$_GLOBAL_LOCAL_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device	= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_last_authentication_server_device='$_GLOBAL_REMOTE_SERVER_ADDRESS' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_Active										= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='1' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");
$_DB_Query_Kernel_Login_Set_Member_Status_Account_Digital_Fingerprints							= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_security_fingerprint_cleartext='$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT',member_security_fingerprint_hashed='$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");

/*
 ============================================================================================================
 + IF: Database Server Query: Update :: Registered Member Account :: Last Authentication, Active AND Digital Fingerprints
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote && $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local && $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device && $_DB_Query_Kernel_Login_Set_Member_Status_Account_Active && $_DB_Query_Kernel_Login_Set_Member_Status_Account_Digital_Fingerprints) {
/**
 * Do Nothing
**/
} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Internal Application: Login Is Activated: Database Server Query :: Update :: Registered Member Account :: Last Authentication Details, Active Status To Active AND Digital Fingerprints

/*
 ============================================================================================================
 + Header Redirect :: Registered Member Account Control Panel
 ============================================================================================================
*/
	
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Control_Panel&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit();

/*
 ============================================================================================================
 + ELSE: Registered Member Account UserName, Electronic Mail Address AND Password Failed Authentication -> Write To Authentication Log
 ============================================================================================================
*/
	
} else { // [ + ] Registered Member Account UserName, Electronic Mail Address AND Password Failed Authentication -> Write To Authentication Log

/*
 ============================================================================================================
 +
 + IF: Posted Data Is Incorrect Information: Log The Authentication Attempt and Redirect To No Known Member Message
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Registered Member Account :: Authentication Log :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME					= fopen("./Member/$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR/Files/Document/Activity_Logging/Authentication_Log.php", "a");
$_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Authentication Log :: Write Authentication Attempt Data To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Authentication_Log_Private_OPEN_FILE_NAME, "
::: Kernel Message :::
---------------------------------------------------------------------------------------
This Registered Member Account Attempted To Authenticate: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_Kernel_Authenticate_Member_Account_POST_ELECTRONIC_MAIL_ADDRESS_CLEAR
* Registered Member Account :: UserName: $_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR
* Registered Member Account :: Password: ****************************
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
Server :: This Web Server
* Timestamp :: Authentication :: Device :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: This Web Server :: Standard Time: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: This Web Server :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Connecting Device
* Timestamp :: Authentication :: Device :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: Connecting Device :: Standard Time: $_GLOBAL_REMOTE_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: Connecting Device :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Security :: Digital Fingerprint
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Generated :: Clear-Text:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT

* Digital Fingerprint :: Unique :: Generated :: HASHED:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED

* Digital Fingerprint :: Unique :: From Database Management System Server :: Clear-Text:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

* Digital Fingerprint :: Unique :: From Database Management System Server :: HASHED:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Connection Information
---------------------------------------------------------------------------------------
Server :: Connecting Device :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: Connecting Device: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Device :: Connecting Device :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT

Server :: This Web Server :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Device :: This Web Server :: Connecting Port Number: $_GLOBAL_LOCAL_SERVER_PORT
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Location
---------------------------------------------------------------------------------------
Global Positioning System Coordinates
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

Geographical Localization of Objects
* Location :: Device :: This Web Server :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Location :: Device :: Connecting Device :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO

Time-Zone
* Location :: Device :: This Web Server :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE

Region
* Location :: Device :: This Web Server :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Web Browser
---------------------------------------------------------------------------------------
* Connecting Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Database Server Query: Update Authentication Log Attempts In Database Server :: Registered Member Account
 ============================================================================================================
*/

$_Kernel_Check_Member_Account_Credentials_Increment_Member_Attempt_Authentication		= $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Member_Attempt_Authentication + 1;
$DB_Query_Kernel_Member_Account_Update_Attempt_Authentication					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_attempt_authentication='$_Kernel_Check_Member_Account_Credentials_Increment_Member_Attempt_Authentication' WHERE member_username='$_Kernel_Authenticate_Member_Account_POST_USERNAME_CLEAR'");

/*
 ============================================================================================================
 + IF: Database Server Query: Update Authentication Log Attempts In Database Server :: Registered Member Account
 ============================================================================================================
*/

if ($DB_Query_Kernel_Member_Account_Update_Attempt_Authentication) {
/**
 * Do Nothing
**/
} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Update :: Registered Member Account :: Authentication Attempt Number

/*
 ============================================================================================================
 + Kill: Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Local
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Local->free_result();

/*
 ============================================================================================================
 + Kill: Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Remote
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Remote->free_result();

/*
 ============================================================================================================
 + Kill: Database Server Query: Update :: Registered Member Account :: Last Login :: Server :: Device
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Login_Set_Member_Status_Account_IP_Address_Last_Authentication_Server_Device->free_result();

/*
 ============================================================================================================
 + Kill: Database Server Query: Update :: Registered Member Account :: Authentication Attempt Number
 ============================================================================================================
*/

// [ C ] $DB_Query_Kernel_Member_Account_Update_Attempt_Authentication->free_result();

/*
 ============================================================================================================
 + Redirect To No Known Registered Member Account Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=NoAccount&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;
	
} // [ + ] IF: Registered Member Account :: Status :: Active :: Is: 1, Active: Deny Authentication

} // [ + ] IF: Registered Member Account :: Device :: Authentication :: Authorized :: Internet Protocol Address IS NOT Current Internet Protocol Address

} // [ + ] IF: Registered Member Account Status Is: Locked, Redirect To Member Account Locked Status Message

} // [ + ] IF: Registered Member Account Authentication Attempt Is: Greater Than Or Equal To 5, Redirect To Member Account Locked Status Message
	
} // [ + ] IF: Verify Password Function: Take Clear-Text Password, Encrypt It and Then Compare It To Encrypted Stored Password

/*
 ============================================================================================================
 + Kill: Database Server Query: Check Registered Member Account Credentials Data
 ============================================================================================================
*/

// [ C ] $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials->free_result();

/*
 ============================================================================================================
 + Kill: Database Server Query: Check Registered Member Account Credentials Data :: Array
 ============================================================================================================
*/

// [ C ] $DB_Query_Kernel_Authenticate_Check_Member_Account_Credentials_Array->free_result();

} else { // [ + ] Database Server Query :: Check :: Number of Rows :: Registered Member Account Based On Provided Credentials

/*
 ============================================================================================================
 + Dabatase Server Check: Registered Member Account Entry Does Not Exist :: Redirect To No Known Registered Member Account Message
 ============================================================================================================
*/

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Message=NoAccount&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Database Server Query :: Check :: Number of Rows :: Registered Member Account Based On Provided Credentials

/*
 ============================================================================================================
 + Kill: Database Server Query: Check Registered Member Account Database Table Column Entry
 ============================================================================================================
*/

// [ C ] $DB_Query_Kernel_Authenticate_Check_Member_Account_Entry->free_result();

} // [ + ] IF: Internal Application: Login Is: Activated

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Logout
 +
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Logout") {

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + Database Server Query: Remove Authorized Registered Member Account Internet Protocol Address
 ============================================================================================================
*/

$_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address				= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorized='000.000.000.000',member_ip_address_authorized_multifactor='000.000.000.000' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_status_account_active='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");
$_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token				= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("UPDATE {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_members SET member_ip_address_authorization_token='0' WHERE member_username='$_GLOBAL_COOKIE_MEMBER_USERNAME' AND member_electronic_mail_address='$_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS'");

/*
 ============================================================================================================
 + IF: Database Server Query: Remove Authorized Registered Member Account Internet Protocol Address
 ============================================================================================================
*/

if ($_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address && $_DB_Query_Kernel_Logout_Remove_Member_Account_Status_Active && $_DB_Query_Kernel_Logout_Remove_Member_Account_IP_Authorization_Token) {

/*
 ============================================================================================================
 + Registered Member Account :: Log :: Logout :: Private :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME					= fopen("./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Document/Activity_Logging/Authentication_Log_Private.php", "a");
$_Kernel_Member_Account_Logout_Log_Private_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Member Account :: Log :: Logout :: Public :: Variables
 ============================================================================================================
*/

$_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME					= fopen("./Member/$_GLOBAL_COOKIE_MEMBER_USERNAME/Files/Document/Activity_Logging/Authentication_Log_Public.php", "a");
$_Kernel_Member_Account_Logout_Log_Public_TIMESTAMP_HASH					= hash('sha256', $_GLOBAL_LOCAL_SERVER_DATE_STANDARD);

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Log :: Logout :: Private :: Write Logout Details To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME, "
::: Kernel Message :::
---------------------------------------------------------------------------------------
This Registered Member Account Successfully Logged-Out: $_GLOBAL_COOKIE_MEMBER_USERNAME
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS
* Registered Member Account :: UserName: $_GLOBAL_COOKIE_MEMBER_USERNAME
* Registered Member Account :: Password: ****************************
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
Server :: This Web Server
* Timestamp :: Authentication :: Device :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: This Web Server :: Standard Time: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: This Web Server :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Connecting Device
* Timestamp :: Authentication :: Device :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: Connecting Device :: Standard Time: $_GLOBAL_REMOTE_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: Connecting Device :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Security :: Digital Fingerprint
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Generated :: Clear-Text:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT

* Digital Fingerprint :: Unique :: Generated :: HASHED:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED

* Digital Fingerprint :: Unique :: From Database Management System Server :: Clear-Text:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

* Digital Fingerprint :: Unique :: From Database Management System Server :: HASHED:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Connection Information
---------------------------------------------------------------------------------------
Server :: Connecting Device :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: Connecting Device: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Device :: Connecting Device :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT

Server :: This Web Server :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Device :: This Web Server :: Connecting Port Number: $_GLOBAL_LOCAL_SERVER_PORT
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Location
---------------------------------------------------------------------------------------
Global Positioning System Coordinates
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

Geographical Localization of Objects
* Location :: Device :: This Web Server :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Location :: Device :: Connecting Device :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO

Time-Zone
* Location :: Device :: This Web Server :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE

Region
* Location :: Device :: This Web Server :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Web Browser
---------------------------------------------------------------------------------------
* Connecting Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Write To File :: Registered Member Account :: Log :: Logout :: Public :: Write Logout Details To Authentication Log
 ============================================================================================================
*/

fwrite($_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME, "
::: Kernel Message :::
---------------------------------------------------------------------------------------
This Registered Member Account Successfully Logged-Out: $_GLOBAL_COOKIE_MEMBER_USERNAME
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Registered Member Account
---------------------------------------------------------------------------------------
* Registered Member Account :: Electronic Mail Address: $_GLOBAL_COOKIE_MEMBER_ELECTRONIC_MAIL_ADDRESS
* Registered Member Account :: UserName: $_GLOBAL_COOKIE_MEMBER_USERNAME
* Registered Member Account :: Password: ****************************
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Timestamps
---------------------------------------------------------------------------------------
Server :: This Web Server
* Timestamp :: Authentication :: Device :: This Web Server :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: This Web Server :: Standard Time: $_GLOBAL_LOCAL_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: This Web Server :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Connecting Device
* Timestamp :: Authentication :: Device :: Connecting Device :: Micro-Time: $_GLOBAL_LOCAL_SERVER_TIME_MICROTIME
* Timestamp :: Authentication :: Device :: Connecting Device :: Standard Time: $_GLOBAL_REMOTE_SERVER_DATE_STANDARD
* Timestamp :: Authentication :: Device :: Connecting Device :: Unix-Epoch Time :: $_GLOBAL_LOCAL_SERVER_TIME_UNIX

Server :: Security :: Digital Fingerprint
* Timestamp :: Digital Fingerprint :: Timestamp HASH: $_Kernel_Member_Account_Authentication_Log_Private_TIMESTAMP_HASH
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Digital Fingerprints
---------------------------------------------------------------------------------------
* Digital Fingerprint :: Unique :: Generated :: Clear-Text:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_CLEARTEXT

* Digital Fingerprint :: Unique :: Generated :: HASHED:
$_INTERNAL_SECURITY_GENERATED_MEMBER_FINGERPRINT_AUTHENTICATION_HASHED

* Digital Fingerprint :: Unique :: From Database Management System Server :: Clear-Text:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_CLEARTEXT

* Digital Fingerprint :: Unique :: From Database Management System Server :: HASHED:
$_GLOBAL_MEMBER_SECURITY_FINGERPRINT_HASHED
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Connection Information
---------------------------------------------------------------------------------------
Server :: Connecting Device :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: Connecting Device: $_GLOBAL_REMOTE_SERVER_ADDRESS
* Internet Protocol Address :: Device :: Connecting Device :: Connecting Port Number: $_GLOBAL_REMOTE_SERVER_PORT

Server :: This Web Server :: Internet Protocol Addresses
* Internet Protocol Address :: Device :: This Web Server: $_GLOBAL_LOCAL_SERVER_ADDRESS
* Internet Protocol Address :: Device :: This Web Server :: Connecting Port Number: $_GLOBAL_LOCAL_SERVER_PORT
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Location
---------------------------------------------------------------------------------------
Global Positioning System Coordinates
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: This Web Server :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From H.T.M.L. ::
* Location :: Device :: Connecting Device :: Global-Positioning-Coordinates In: X, Y, Z :: From P.H.P. ::

Geographical Localization of Objects
* Location :: Device :: This Web Server :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO
* Location :: Device :: Connecting Device :: Geographical-Localization-Objects :: $_GLOBAL_MEMBER_LOCATION_CURRENT_GLO

Time-Zone
* Location :: Device :: This Web Server :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Time-Zone :: $_GLOBAL_MEMBER_LOCATION_CURRENT_TIMEZONE_SERVER_REMOTE

Region
* Location :: Device :: This Web Server :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_LOCAL
* Location :: Device :: Connecting Device :: Region: $_GLOBAL_MEMBER_LOCATION_CURRENT_REGION_SERVER_REMOTE
---------------------------------------------------------------------------------------

---------------------------------------------------------------------------------------
Connecting Device :: Details :: Web Browser
---------------------------------------------------------------------------------------
* Connecting Device :: Reported Web Browser :: $_GLOBAL_REMOTE_SERVER_HTTP_USER_AGENT_DISPLAY
---------------------------------------------------------------------------------------
");

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Log :: Logout :: Private
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Logout_Log_Private_OPEN_FILE_NAME);

/*
 ============================================================================================================
 + Close File :: Registered Member Account :: Log :: Logout :: Public
 ============================================================================================================
*/

fclose($_Kernel_Member_Account_Logout_Log_Public_OPEN_FILE_NAME);

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Database Server Query :: Update :: Registered Member Account Entry :: Remove Authorized Internet Protocol Address & Token, Set Account To Inactive

/*
 ============================================================================================================
 + Kill: Database Server Query: Remove Authorized Member Account Internet Protocol Address
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Logout_Remove_Member_Account_Authorized_IP_Address->free_result();

/*
 ============================================================================================================
 + Reduce Time On All Stored Browser Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);

/*
 ============================================================================================================
 + Secure-Destroy All Stored Browser Cookies
 ============================================================================================================
*/

/*
 + Nothing Here Yet
*/

/*
 ============================================================================================================
 + Header Redirect :: News
 ============================================================================================================
*/
	
	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=News&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Check For :: Valid Registered Member Account Credential Data :: In Browser Cookies

} // [ + ] IF: Internal Application: Logout Is: Activated

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Set Language
 +
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Language") {

	$_KERNEL_POST_SET_LANGUAGE	 							= $_POST['IAM_Set_Language'];
	
	setcookie("kernel_member_language", "$_KERNEL_POST_SET_LANGUAGE", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=System_Message&Message=Language&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Language :: Is: Activated

/*
 ============================================================================================================
 +
 +
 + Internal :: Application :: Set Theme
 +
 +
 ============================================================================================================
*/

if ($_GET["$_INTERNAL_APPLICATION_MODULE_INTERNAL"] == "Theme") {

$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_144PI	 						= $_POST['IAM_Set_Theme_Directory_144PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_240PI	 						= $_POST['IAM_Set_Theme_Directory_240PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_340PI	 						= $_POST['IAM_Set_Theme_Directory_340PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_480PI	 						= $_POST['IAM_Set_Theme_Directory_480PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_520PI	 						= $_POST['IAM_Set_Theme_Directory_520PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_640PI	 						= $_POST['IAM_Set_Theme_Directory_640PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_720PI	 						= $_POST['IAM_Set_Theme_Directory_720PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_1080PI	 						= $_POST['IAM_Set_Theme_Directory_1080PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2040PI	 						= $_POST['IAM_Set_Theme_Directory_2040PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2160PI	 						= $_POST['IAM_Set_Theme_Directory_2160PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_4K	 							= $_POST['IAM_Set_Theme_Directory_4K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_8K	 							= $_POST['IAM_Set_Theme_Directory_8K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_16K	 						= $_POST['IAM_Set_Theme_Directory_16K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_32K	 						= $_POST['IAM_Set_Theme_Directory_32K'];

$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_144PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_144PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_240PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_240PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_340PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_340PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_480PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_480PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_520PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_520PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_640PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_640PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_720PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_720PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_1080PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_1080PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_2040PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_2040PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_2160PI	 					= $_POST['IAM_Set_Theme_Video_Resolution_2160PI'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_4K	 						= $_POST['IAM_Set_Theme_Video_Resolution_4K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_8K	 						= $_POST['IAM_Set_Theme_Video_Resolution_8K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_16K	 						= $_POST['IAM_Set_Theme_Video_Resolution_16K'];
$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_32K	 						= $_POST['IAM_Set_Theme_Video_Resolution_32K'];

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 144 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_144PI) {
	
	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_144PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_144PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 144 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 240 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_240PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_240PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_240PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 240 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 340 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_340PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_340PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_340PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 340 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 480 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_480PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_480PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_480PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 480 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 520 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_520PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_520PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_520PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 520 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 640 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_640PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_640PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_640PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 640 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 720 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_720PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_720PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_720PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 720 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 1080 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_1080PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_1080PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_1080PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 1080 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 2040 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2040PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2040PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_2040PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 2040 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 2160 :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2160PI) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_2160PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_2160PI", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 2160 :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 4K :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_4K) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_4K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_4K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 4K :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 8K :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_8K) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme_video_resolution", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_8K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_8K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 8K :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 16K :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_16K) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_16K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_16K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 16K :: Progressive / Interlaced

/*
 ============================================================================================================
 + IF: Internal Application: Theme :: SET :: Theme :: 32K :: Progressive / Interlaced
 ============================================================================================================
*/

if ($_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_32K) {

	setcookie("kernel_visitor_directory_theme", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "$_Kernel_Set_Member_Account_POST_SET_THEME_DIRECTORY_32K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);
	setcookie("kernel_visitor_directory_theme_video_resolution", "$_Kernel_Set_Member_Account_POST_SET_THEME_VIDEO_RESOLUTION_32K", time()+$_GLOBAL_SYSTEM_COOKIE_TIME);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Theme&Message=ThemeSet&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Internal Application: Theme :: SET :: Theme :: 32K :: Progressive / Interlaced

} // [ + ] IF: Internal Application: Theme :: Is: Activated

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Background :: Includes :: Application Modules
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Language File
 +
 ============================================================================================================
*/

	include_once "./System/Language/$_GLOBAL_SYSTEM_LANGUAGE_DIRECTORY/Language.$_INTERNAL_FILE_EXTENSION";

/*
 ============================================================================================================
 +
 + Background Application Modules :: Activity Logging
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Administrator-Level Activity Logging :: Application Module
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account Access Level Is: Administrator
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Background/Log_Administration";

} // [ + ] IF: Registered Member Account Access Level Is: Administrator, Include Activity Logging Application

} // [ + ] IF: Registered Member Is Logged-In

/*
 ============================================================================================================
 + Background-Level Activity Logging :: Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Background";

/*
 ============================================================================================================
 + Member-Level Activity Logging :: Application Module
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For Valid Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	include_once "./Applications/Background/Log_Member";

} else { // [ + ] IF: Registered Member Account IS NOT Logged-In, Include Non-Registered Visitor Log

/*
 ============================================================================================================
 + Visitor-Level Activity Logging :: Application Module
 ============================================================================================================
*/

	include_once "./Applications/Background/Log_Visitor";

} // [ + ] IF: Registered Member Is Logged-In: Include Background Application: Member Activity Log

/*
 ============================================================================================================
 +
 + Theme File Includes
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System Settings Defined Theme
 ============================================================================================================
*/

	include_once "./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/Theme.php";

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Plug-In and Extension :: Includes :: Application Modules
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Plug-In :: Camera
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Application :: Plug-In :: Camera :: Status :: Is: On, Include File: Camera Application Plug-In File
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_CAMERA >= "1") {

	include_once "./System/Plug-Ins/Camera/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_CAMERA/Camera.$_INTERNAL_FILE_EXTENSION";

} // [ + ] IF: System :: Application :: Plug-In :: Camera :: Status :: Is: On, Include :: File: Camera Application Plug-In File
	
/*
 ============================================================================================================
 +
 + Plug-In :: Microphone
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Application :: Plug-In :: Microphone :: Status :: Is: On, Include File: Microphone Application Plug-In File
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_MICROPHONE >= "1") {

	include_once "./System/Plug-Ins/Microphone/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_MICROPHONE/Microphone.$_INTERNAL_FILE_EXTENSION";

} // [ + ] IF: System :: Application :: Plug-In :: Microphone :: Status :: Is: On, Include :: File: Microphone Application Plug-In File
	
/*
 ============================================================================================================
 +
 + Plug-In :: Notifications
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Application :: Plug-In :: Notifications :: Status :: Is: On, Include File: Notifications Application Plug-In File
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_NOTIFICATIONS >= "1") {

	include_once "./System/Plug-Ins/Notifications/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_NOTIFICATIONS/Notifications.$_INTERNAL_FILE_EXTENSION";

} // [ + ] IF: System :: Application :: Plug-In :: Notifications :: Status :: Is: On, Include :: File: Notifications Application Plug-In File

/*
 ============================================================================================================
 +
 + Plug-In :: Text-Editor
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Application :: Plug-In :: Text-Editor :: Status :: Is: On, Include File: Text-Editor Application Plug-In File
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_TEXT_EDITOR >= "1") {

	include_once "./System/Plug-Ins/Text-Editor/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_TEXT_EDITOR/Text-Editor.$_INTERNAL_FILE_EXTENSION";

} // [ + ] IF: System :: Application :: Plug-In :: Text-Editor :: Status :: Is: On, Include :: File: Text-Editor Application Plug-In File
	
/*
 ============================================================================================================
 +
 + Plug-In :: Time
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Application :: Plug-In :: Time :: Status :: Is: On, Include File: Text-Editor Application Plug-In File
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_PLUGIN_STATUS_TIME >= "1") {

	include_once "./System/Plug-Ins/Time/$_GLOBAL_SYSTEM_PLUGIN_DIRECTORY_TIME/Time.$_INTERNAL_FILE_EXTENSION";

} // [ + ] IF: System :: Application :: Plug-In :: Time :: Status :: Is: On, Include :: File: Time Application Plug-In File

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] System :: Protocol :: Loops
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + System Protocol :: Offline Mode
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Offline-Mode Is: On, ( 1 ) and Registered Member Account Access Level Is NOT Administrator, Redirect To Offline-Mode Status Message
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_STATUS_OFFILINE_MODE >= 1) {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Access Level :: Is: Greater Than OR Equal To: 2, Moderator Privileges :: Print Offline Mode Message
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_Message_Kernel_OFFLINE_MODE_ENABLED);

} else {

/*
 ============================================================================================================
 + ELSE: Registered Member Account :: Access Level :: Is: Less Than OR Equal To: 1, Registered Member Account Privileges :: Re-Direct To The Offline Mode Message
 ============================================================================================================
*/

	header("Location: ./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/HTML/Offline.html?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

} // [ + ] IF: Web Site :: Status :: Offline Mode Status Is: On, Redirect Non-Administrator To Offline Mode Status Web Page AND Message

} // [ + ] IF: Check For :: Status :: Web Site Offline Mode

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Header :: Control
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Internal :: Header :: Control :: External Browser Cache Control
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Internal :: Header :: Control :: External Browser Cache Control :: Store No Cache Data
 ============================================================================================================
*/

header("Cache-Control: max-age=0, no-cache, no-store, private, proxy-revalidate, must-revalidate");
header("Cache-Control: Clear-Site-Data");
header("Pragma: no-cache");
header("Expires: 0");

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Hyper-Text-Markup-Language Output :: Data Compression :: Protocols
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Hyper-Text-Markup-Language Output :: Data Compression :: Start
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Page Data Compression Is Set To: On, Initialize Web Page Output With Compression
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_STATUS_GZIP >= 1) {

	ob_start("ob_gzhandler");

	$_GLOBAL_SYSTEM_STATUS_GZIP_DISPLAY						= "GZIP :: Compression: ON";

/*
 ============================================================================================================
 + ELSE: Page Data Compression Is Set To: Off, Initialize Web Page Output Without Compression
 ============================================================================================================
*/

} else {

	$_GLOBAL_SYSTEM_STATUS_GZIP_DISPLAY						= "GZIP :: Compression: OFF";

} // [ + ] IF: GZIP Compression Is On: Set Display G.N.U. ZIP Compression Status Variable

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language Data, Time Explosion :: Start
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Initialize Microtime
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START					= microtime();

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Data-Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY				= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START);

/*
 ============================================================================================================
 + Hyper-Text-Markup-Language :: Output :: Page Data :: Generation Variables :: Explode Data, Then Calculate Data Generation Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START					= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_START_ARRAY[0];

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document-Data :: Generation: Start
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document-Data :: Generation :: Data Explosion
 +
 ============================================================================================================
*/

echo ("
<!--================================================================================================-->
<!--				    $_PROJECT_STRING_NAME_EXTENDED				    -->
<!--================================================================================================-->

<!--================================================================================================-->
<!--		$_PROJECT_STRING_LEGAL_COPYRIGHT		    -->
<!--================================================================================================-->

<!--=============================-->
<!--        DOCUMENT TYPE        -->
<!--=============================-->

<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">

<!--==============================-->
<!--        START DOCUMENT        -->
<!--==============================-->

<HTML>

<!--==============================-->
<!--	     HEAD CONTENTS        -->
<!--==============================-->

	<HEAD>
		<TITLE>$_GLOBAL_SYSTEM_SITE_TITLE</TITLE>
		<LINK REL=\"stylesheet\" HREF=\"./Theme/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME_VIDEO_RESOLUTION/$_GLOBAL_SYSTEM_SETTINGS_DIRECTORY_THEME/Style_Sheet/Style.css?$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_FILEINCLUSION_RANDOM_STRING_GENERATION\" TYPE=\"text/css\">
		$_THIS_THEME_META_DATA
	</HEAD>

<!--==============================-->
<!-- 	     BODY CONTENTS	  -->
<!--==============================-->

	<BODY>
");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 1 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_1);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Administration :: Administration Panel
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 3) {

	echo ($_THIS_THEME_APPLICATION_PANEL_1);

		include_once "./Applications/Panel/Visibility/Member/Administration.panel";

	echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Administrator-Level Access Credentials Exist: Show Administration Application Panel

/*
 ============================================================================================================
 +
 +
 + [ @ ] Administration :: Moderator Panel
 +
 +
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	echo ($_THIS_THEME_APPLICATION_PANEL_1);

		include_once "./Applications/Panel/Visibility/Member/Moderator.panel";

	echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Moderator-Level Access Credentials Exist: Show Moderator Application Panel

/*
 ============================================================================================================
 +
 +
 + [ @ ] Panel Application Module Entries, Aligned :: Left
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + List and Display :: Panel Application Module Entries :: Aligned Left
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Applications_Panel_Aligned_Left 					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel_visibility_member WHERE application_panel_alignment='0' AND application_file_status='1' ORDER BY application_panel_row ASC");

/*
 ============================================================================================================
 + WHILE: Retrieving :: Panel Application Module Entries :: From The Database Management System Server Database
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array = $_DB_Query_Kernel_Applications_Panel_Aligned_Left->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_ID							= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['id'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_ALIGNMENT						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_panel_alignment'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_INTEGRITY_PHYSICAL					= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_NAME						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_permission_location_ip_address'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_STATUS						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_VISIBILITY						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_VERSION						= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_file_version'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_ROW							= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_panel_row'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_TITLE							= $_DB_Query_Kernel_Applications_Panel_Aligned_Left_Fetch_Array['application_panel_title'];

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials :: ARE NOT NULL AND Registered Member Account Access Level Is: Greater Than OR Equal To: Application Panel File Permission, Aligned: Left
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= $_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION) {

		echo ($_THIS_THEME_APPLICATION_PANEL_1);
		echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_TITLE);

			include_once "./Applications/Panel/Visibility/Member/$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_NAME.panel";

		echo ($_THIS_THEME_APPLICATION_PANEL_2);

/*
 ============================================================================================================
 + ELSE, IF: Registered Member Account :: Credentials :: ARE NULL AND Application Panel File Permission Is: Less Than OR Equal To: Zero
 ============================================================================================================
*/

} else { // [ + ] ELSE, IF: Registered Member Account :: Credentials :: ARE NULL AND Application Panel File Permission Is: Less Than OR Equal To: Zero

if (!$_GLOBAL_COOKIE_MEMBER_USERNAME && $_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_PERMISSION <= 0) {

		echo ($_THIS_THEME_APPLICATION_PANEL_1);
		echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_TITLE);

			include_once "./Applications/Panel/Visibility/Member/$_KERNEL_APPLICATION_PANEL_ALIGNED_LEFT_FILE_NAME.panel";

		echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Registered Member Account :: Credentials DO NOT Exist AND Appliction Panel Access Level Is: 0: Display :: Application :: Panel :: Aligned Left

} // [ + ] IF: Registered Member Account :: Credentials Exist: Display :: Application :: Panel :: Aligned Left

} // [ + ] WHILE: Retrieving :: Application Module :: Panel :: Entries :: Aligned Left :: From The Database Management System Server Database

/*
 ============================================================================================================
 + Kill: Database Server Query: Fetch Panel Application Modules: Aligned Left
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Applications_Panel_Aligned_Left->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 2 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_2);

/*
 ============================================================================================================
 +
 +
 +
 + [ @ ] Internal :: Security :: Protocols
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + Internal Security :: Registered Member Account :: Device :: Restriction :: Internet Protocol Address
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check :: The Database Management System Server Database :: Setting :: For Restricted Internet Protocol Address Enforcement
 ============================================================================================================
*/

if ($_GLOBAL_SYSTEM_SETTING_ACCOUNT_SECURITY_RESTRICT_AUTHORIZED_INTERNET_PROTOCOL_ADDRESS == "1") {

/*
 ============================================================================================================
 + IF: Check For Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

/*
 ============================================================================================================
 + IF: Registered Member Account Authorized Internet Protocol Address IS NOT Current Connected Internet Protocol Address
 ============================================================================================================
*/

if ($_GLOBAL_MEMBER_IP_ADDRESS_AUTHORIZED != "$_GLOBAL_REMOTE_SERVER_ADDRESS") {

/*
 ============================================================================================================
 + Reduce Time On All Browser Stored Cookies
 ============================================================================================================
*/

	setcookie("kernel_member_electronic_mail_address", "", time()-42000);
	setcookie("kernel_member_language", "", time()-42000);
	setcookie("kernel_member_password", "", time()-42000);
	setcookie("kernel_member_security_fingerprint", "", time()-42000);
	setcookie("kernel_member_username", "", time()-42000);
	setcookie("kernel_visitor_directory_theme", "", time()-42000);

	header("Location: ?$_INTERNAL_APPLICATION_MODULE_MEMBER=Login&Authorization=IP_Address&$_GLOBAL_SYSTEM_SECURITY_CACHE_CIRCUMVENTION_HTR_RANDOM_STRING_GENERATION");
	exit;

/*
 ============================================================================================================
 + ELSE: Registered Member Account Authorized Internet Protocol Address IS Current Connected Internet Protocol Address, Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: Registered Member Account Authorized Internet Protocol Address IS NOT The Current Internet Protocol Address, Immediately Logout

} // [ + ] IF: Registered Member Account Is Logged-In And Valid Credentials Are Set

/*
 ============================================================================================================
 + ELSE: The Database Management System Server Database :: Setting :: For Restricted Internet Protocol Address Enforcement :: Is: Off, Do Nothing
 ============================================================================================================
*/

} else {
/**
 * Do Nothing
**/
} // [ + ] IF: System :: Settings :: Security :: Restricted Internet Protocol Address Enforcement :: Is: Enabled

/*
 ============================================================================================================
 +
 +
 +
 + [ ^ ] Application Module :: Includes
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Services-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Services
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Services
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Services							= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration_root_services ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Services-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Services_Fetch_Array = $_DB_Query_Kernel_Select_Applications_Services->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME							= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_MICROPHONE					= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS		= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_VISIBILITY						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_VERSION						= $_DB_Query_Kernel_Select_Applications_Services_Fetch_Array['application_file_version'];

/*
 ============================================================================================================
 + IF: Services Application :: Display :: Services :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_SERVICES] == "$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Services :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_SERVICES_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Services :: Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Services/$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Services :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_SERVICES_FILE_PERMISSION >= "5") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist, Are Valid AND Access Level Is: Services Root Administration, Include Application Module
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 5) {

	include_once "./Applications/Services/$_KERNEL_APPLICATION_MODULE_SERVICES_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: Services Root Administration :: Is: Restricted Access Level
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_ACCESS_RESTRICTED_SERVICES);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: Services, >=5

} // [ + ] IF: Application Module :: Services :: Access Level :: Permission Is: Services, >=5

/*
 ============================================================================================================
 + ELSE: Application Module :: Services Root Administration :: Is: De-Activated
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_DEACTIVATED);

} // [ + ] IF: Internal Application :: Services :: Is Application Module :: Services :: Is: Activated OR De-Activated

/*
 ============================================================================================================
 + ELSE: Application Module :: Services Root Administration :: File DOES NOT Exist
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_SERVICES_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Services :: Physical File :: DOES OR DOES NOT Exist

} // [ + ] IF: Internal Application :: Services :: Is Application Module :: Services :: Is: Activated OR De-Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Services-Level

/*
 ============================================================================================================
 + Kill: Database Server Query: Select From Applications :: Services
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Select_Applications_Services->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Root-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Root
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Root
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Root							= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration_root ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Root-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Root_Fetch_Array = $_DB_Query_Kernel_Select_Applications_Root->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_MODULE_ROOT_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION					= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_VISIBILITY					= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_MODULE_ROOT_FILE_VERSION						= $_DB_Query_Kernel_Select_Applications_Root_Fetch_Array['application_file_version'];

/*
 ============================================================================================================
 + IF: Root Application :: Display :: Root :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_ROOT] == "$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Root :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ROOT_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Root :: Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Root/$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Root :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ROOT_FILE_PERMISSION >= "4") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist, Are Valid AND Access Level Is: Root Administration, Include Application Module
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 4) {

	include_once "./Applications/Root/$_KERNEL_APPLICATION_MODULE_ROOT_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: Root Administration :: Is: Restricted Access Level
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_ACCESS_RESTRICTED_ROOT);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: Root, >=4

} // [ + ] IF: Application Module :: Root :: Access Level :: Permission Is: Root, >=4

/*
 ============================================================================================================
 + ELSE: Application Module :: Root Administration :: Is: De-Activated
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module :: Root :: File Status :: Is: Activated OR De-Activated

/*
 ============================================================================================================
 + ELSE: Application Module :: Root Administration :: File DOES NOT Exist
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ROOT_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Root :: Physical File :: DOES OR DOES NOT Exist

} // [ + ] IF: Internal Application :: Root :: Is Application Module :: Root :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Root-Level

/*
 ============================================================================================================
 + Kill: Database Server Query: Select From Applications :: Root
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Select_Applications_Root->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Administration-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Retrieve :: Application Module Entries :: Administration
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Administration
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Administration 						= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_administration_visibility_administration ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array = $_DB_Query_Kernel_Select_Applications_Administration->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_INTEGRITY					= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME						= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION					= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_CAMERA				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_STATUS						= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_VISIBILITY					= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_VERSION						= $_DB_Query_Kernel_Select_Applications_Administration_Fetch_Array['application_file_version'];

/*
 ============================================================================================================
 + IF: Administration Application :: Display :: Administrator :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_ADMINISTRATOR] == "$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Administration :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Administration Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Administration/Visibility/Administration/$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: Administration :: File Permission :: Is: On, Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_PERMISSION >= "3") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist, Are Valid AND Access Level Is: Administration, Include Application Module
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 3) {

	include_once "./Applications/Administration/Visibility/Administration/$_KERNEL_APPLICATION_MODULE_ADMINISTRATION_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: Administration :: Is: Restricted Access Level
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_ACCESS_RESTRICTED_ADMINISTRATOR);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >=3

} // [ + ] IF: Application Module :: Administrator :: Access Level :: Permission Is: Administration >=3

/*
 ============================================================================================================
 + ELSE: Application Module :: Administration :: Is: De-Activated
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_DEACTIVATED);

} // [ + ] IF: Application Module :: Administrator :: Physical File :: DOES OR DOES NOT Exist

/*
 ============================================================================================================
 + ELSE: Application Module :: Administration :: File DOES NOT Exist
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_ADMINISTRATION_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Administrator :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Administrator :: Is Application Module :: Administrator :: Is: Activated OR De-Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Administration-Level

/*
 ============================================================================================================
 + Kill: Database Server Query: Select From Applications :: Administration
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Select_Applications_Administration->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Moderator-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Directory :: Applications :: Moderation
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Find and Open :: Directory :: Applications :: Moderation
 ============================================================================================================
*/

$_FIND_DIRECTORY_APPLICATIONS_MODERATION			= "./Applications/Moderator";
$_READ_DIRECTORY_APPLICATIONS_MODERATION			= opendir($_FIND_DIRECTORY_APPLICATIONS_MODERATION);

/*
 ============================================================================================================
 + WHILE: Reading :: Directory :: Applications :: Moderation
 ============================================================================================================
*/

while (($_READ_DIRECTORY_APPLICATIONS_MODERATION = readdir($_READ_DIRECTORY_APPLICATIONS_MODERATION))) {

/*
 ============================================================================================================
 + IF: Stop :: Exploit :: Local-File-Inclusion and Remote-File-Inclusion
 ============================================================================================================
*/

if ($_READ_DIRECTORY_APPLICATIONS_MODERATION == "." || $_READ_DIRECTORY_APPLICATIONS_MODERATION == ".." || $_READ_DIRECTORY_APPLICATIONS_MODERATION == "index.php") {
/**
 * Do Nothing
**/
} else {

/*
 ============================================================================================================
 + IF: Internal Application :: $_INTERNAL_APPLICATION_MODULE_MODERATOR :: Is: Application Module :: Moderation
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_MODERATOR] == "$_READ_DIRECTORY_APPLICATIONS_MODERATION") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Access Level :: Is: >= 2
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

		include_once "$_FIND_DIRECTORY_APPLICATIONS_MODERATION/$_READ_DIRECTORY_APPLICATIONS_MODERATION";

/*
 ============================================================================================================
 + ELSE: Registered Member Account :: Access Level :: Is: < 2, Print Application Access Restriction Message
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_MODERATION_APPLICATION_ACCESS_RESTRICTED_MODERATION);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: Moderation, >= 2

} // [ + ] IF: Internal Application: $_INTERNAL_APPLICATION_MODULE_MODERATOR :: Is: Activated

} // [ + ] IF: Directory :: Applications :: Moderation IS Anything ELSE Except The Directory :: Applications :: Moderation

} // [ + ] WHILE: Reading :: Directory :: Applications :: Moderation

/*
 ============================================================================================================
 + Close :: Directory :: Applications :: Administration
 ============================================================================================================
*/

closedir($_READ_DIRECTORY_APPLICATIONS_MODERATION);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch :: Application Module Entries :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Server Query :: Select :: Application Module Entries :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Applications_Member 							= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_member_visibility_member ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Applications_Member_Fetch_Array	= $_DB_Query_Kernel_Select_Applications_Member->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_INTEGRITY						= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_INTEGRITY_INSTALLATION					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME							= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION						= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_MICROPHONE					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_GPS					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_GLO					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS		= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_permission_location_internet_protocol_address'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_STATUS							= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_TIMESTAMP_INSTALLATION					= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_VISIBILITY						= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_VERSION							= $_DB_Query_Kernel_Select_Applications_Member_Fetch_Array['application_file_version'];

/*
 ============================================================================================================
 + IF: Non-Registered Visitor OR Registered Member Account-Level :: Application :: Display :: Non-Registered Visitor, Registered Member Account and Moderator-Level :: Is: File Name
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_MEMBER] == "$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME") {

/*
 ============================================================================================================
 + IF: Application Module :: Non-Registered Visitor, Registered Member Account and Moderator-Level :: File Status :: Is: On
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_STATUS >= "1") {

/*
 ============================================================================================================
 + IF: Physical File Exists :: Application Module :: Non-Registered Visitor, Registered Member Account and Moderator-Level Application Module File
 ============================================================================================================
*/

if (file_exists("./Applications/Member/Visibility/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME")) {

/*
 ============================================================================================================
 + IF: Application Module :: File Permission :: Is: Public and No Registered Member Account Credentials Exist: Include Application Module File
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "0") {

	include_once "./Applications/Member/Visibility/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: File Permission :: Is: NOT Public and No Registered Member Account Credentials Exist, Check File Permission
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Application Module :: File Permission :: Is: Access Level :: Registered Member Account
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "1") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist, Are Valid AND Access Level Is: Registered Member Account, Include Application Module
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 1) {

	include_once "./Applications/Member/Visibility/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: Registered Member Account :: Is: Restricted Access Level
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_ACCESS_RESTRICTED_MEMBER);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >= 1

/*
 ============================================================================================================
 + ELSE: Application Module :: File Permission :: Is NOT: Access Level :: Registered Member Account
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Application Module :: File Permission :: Is: Registered Member Account With Moderator Privileges
 ============================================================================================================
*/

if ($_KERNEL_APPLICATION_MODULE_MEMBER_FILE_PERMISSION == "2") {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist, Are Valid AND Access Level Is: Moderator, Include Application Module
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= 2) {

	include_once "./Applications/Member/Visibility/Member/$_KERNEL_APPLICATION_MODULE_MEMBER_FILE_NAME";

/*
 ============================================================================================================
 + ELSE: Application Module :: Registered Member Account With Moderator Privileges :: Is: Restricted Access Level
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_ACCESS_RESTRICTED_MODERATOR);

} // [ + ] IF: Registered Member Account :: Cookies :: Credentials :: Exist, are Valid and Registered Member Account Access-Level Is: >=2

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 2, Registered Member Account :: Moderator

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 1, Registered Member Account

} // [ + ] IF: Application Module :: File Permission :: Access Level :: Is: 0, Non-Registered Visitor

/*
 ============================================================================================================
 + ELSE: Application Module :: Registered Member Account :: File DOES NOT Exist
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_FILE_NOT_FOUND);

} // [ + ] IF: Application Module :: Non-Registered Visitor :: Physical File :: Does Exist

/*
 ============================================================================================================
 + ELSE: Application Module :: Registered Member Account :: Is: De-Activated
 ============================================================================================================
*/

} else {

	echo ($_Message_Kernel_APPLICATION_MEMBER_APPLICATION_DEACTIVATED); 

} // [ + ] IF: Application Module :: Non-Registered Visitor :: File Status :: Is: On OR Off

} // [ + ] IF: Internal Application :: Non-Registered Visitor :: Is Application Module :: Non-Registered Visitor :: Is: Activated

} // [ + ] WHILE: Retrieve :: Application Module Entry Data :: From Database Server :: Non-Registered Visitor, Registered Member Account and Moderator-Level

/*
 ============================================================================================================
 +
 +
 + [ @ ] Application Modules :: Custom-Level
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Fetch :: Custom Application Module Entries
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Select_Custom_Applications 						= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_custom ORDER BY id ASC");

/*
 ============================================================================================================
 + WHILE: Retrieving :: Custom Application Module Entries :: From The Database Management System Server Database
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array = $_DB_Query_Kernel_Select_Custom_Applications->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_MODULE_CUSTOM_ID							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['id'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_DATA							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_data'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_NAME							= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_name'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_timestamp_installation'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_TIMESTAMP_UPDATE					= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_timestamp_update'];
$_KERNEL_APPLICATION_MODULE_CUSTOM_VISIBILITY						= $_DB_Query_Kernel_Select_Custom_Applications_Fetch_Array['custom_application_visibility'];

/*
 ============================================================================================================
 +
 + IF: Include and Display :: Custom Application Module Entries
 +
 ============================================================================================================
*/

if ($_GET[$_INTERNAL_APPLICATION_MODULE_CUSTOM] == "$_KERNEL_APPLICATION_MODULE_CUSTOM_ID") {

		echo ("<CENTER><BIG><B>$_KERNEL_APPLICATION_MODULE_CUSTOM_NAME</B></BIG></CENTER><HR>$_KERNEL_APPLICATION_MODULE_CUSTOM_DATA<HR>Custom Application Module Installed: $_KERNEL_APPLICATION_MODULE_CUSTOM_TIMESTAMP_INSTALLATION");

} // [ + ] IF: Dipslay :: Custom Application Module Entry :: Data

} // [ + ] WHILE: Fetching :: Custom Application Module Entries':: From The Database Management System Server Database

/*
 ============================================================================================================
 + Kill: Database Server Query: Select Custom Applications
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Select_Custom_Applications->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 3 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_3);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Panel Application Module Entries, Aligned :: Right
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + List :: Panel Application Modules :: Aligned Right
 +
 ============================================================================================================
*/

$_DB_Query_Kernel_Applications_Panel_Aligned_Right 					= $_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->query("SELECT * FROM {$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX}_applications_panel_visibility_member WHERE application_panel_alignment='1' AND application_file_status='1' ORDER BY application_panel_row ASC");

/*
 ============================================================================================================
 + WHILE: Retrieving :: Panel Application Module Entries :: From The Database Management System Server Database
 ============================================================================================================
*/

while ($_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array = $_DB_Query_Kernel_Applications_Panel_Aligned_Right->fetch_array(MYSQLI_BOTH)) {

$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_ID							= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['id'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_ALIGNMENT						= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_panel_alignment'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_INTEGRITY_PHYSICAL				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_integrity'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_INTEGRITY_INSTALLATION				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_integrity_installation'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_NAME						= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_name'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION					= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION_CAMERA					= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission_camera'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION_MICROPHONE				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission_microphone'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION_LOCATION_GPS				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission_location_gps'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION_LOCATION_GLO				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission_location_glo'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION_LOCATION_INTERNET_PROTOCOL_ADDRESS	= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_permission_location_ip_address'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_STATUS						= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_status'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_TIMESTAMP_INSTALLATION				= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_timestamp_installation'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_VISIBILITY					= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_visibility'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_VERSION						= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_file_version'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_ROW							= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_panel_row'];
$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_TITLE							= $_DB_Query_Kernel_Applications_Panel_Aligned_Right_Fetch_Array['application_panel_title'];

/*
 ============================================================================================================
 + IF: Registered Member Account :: Credentials Exist :: AND :: Registered Member Account :: Access Level :: Is: Greater Than OR Equal To: Application Panel Permission Requirements, Include Application Panel
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null && $_GLOBAL_MEMBER_ACCESS_LEVEL >= $_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION) {

			echo ($_THIS_THEME_APPLICATION_PANEL_1);

			echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_TITLE);

				include_once "./Applications/Panel/Visibility/Member/$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_NAME.panel";

			echo ($_THIS_THEME_APPLICATION_PANEL_2);

/*
 ============================================================================================================
 + ELSE: Registered Member Account :: Credentials Exist :: AND :: Registered Member Account :: Access Level :: Is NOT: Greater Than OR Equal To: Application Panel Permission Requirements, Include Lower Access Level Application Panel
 ============================================================================================================
*/

} else {

/*
 ============================================================================================================
 + IF: Registered Member Account :: Cookie :: DOES NOT Exist AND Application Panel Permission Is: Less Than OR Equal To: Public, Include Public Access Level Application Panel
 ============================================================================================================
*/

if (!$_GLOBAL_COOKIE_MEMBER_USERNAME && $_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_PERMISSION <= 0) {

			echo ($_THIS_THEME_APPLICATION_PANEL_1);

			echo ($_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_TITLE);

				include_once "./Applications/Panel/Visibility/Member/$_KERNEL_APPLICATION_PANEL_ALIGNED_RIGHT_FILE_NAME.panel";

			echo ($_THIS_THEME_APPLICATION_PANEL_2);

} // [ + ] IF: Registered Member Account :: Credentials DO NOT Exist AND Appliction Panel Access Level Is: 0: Display :: Application :: Panel :: Aligned Right

} // [ + ] IF: Registered Member Account :: Credentials Exist: Display :: Application :: Panel :: Aligned Right

} // [ + ] WHILE: Retrieving :: Application Module :: Panel :: Entries :: Aligned Right :: From The Database Management System Server Database

/*
 ============================================================================================================
 + Kill: Database Server Query: Fetch Panel Application Modules, Aligned :: Right
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Applications_Panel_Aligned_Right->free_result();

/*
 ============================================================================================================
 +
 +
 + [ @ ] Theme :: Template Layout [ 4 ]
 +
 +
 ============================================================================================================
*/

echo ($_GLOBAL_THEME_LAYOUT_4);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document-Data :: Generation: End
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Hyper-Text-Markup-Language :: Document-Data Generation :: Data Implosion
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Markup-Language :: Data-Time Explosion-Implosion :: Variables
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Data Implosion :: Microtime, End
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END						= microtime();

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY				= explode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Implosion
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_DATATIME_IMPLOSION_END_ARRAY				= implode(" ", $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END);

/*
 ============================================================================================================
 + Data Implosion :: Time Explosion Array, Calculate Data-Time Explosion End-Time
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END						= $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[1] + $_KERNEL_WEBPAGE_GENERATION_DATATIME_EXPLOSION_END_ARRAY[0];

/*
 ============================================================================================================
 + Data Implosion :: Calculate Start-Time and End-Time Data-Time Explosion For Page Generation
 ============================================================================================================
*/

$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME						= $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_END - $_KERNEL_WEBPAGE_GENERATION_TIME_MICROTIME_START; 
$_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME						= round($_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME,5);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Hyper-Text-Markup-Language :: Document: End: Output
 +
 +
 ============================================================================================================
*/

echo ("
		<CENTER>
			This Web Site Is Powered By:&nbsp;<A HREF=\"$_PROJECT_SERVER_URL_SOURCEFORGE_SECURE\" TARGET=\"_NEW\" TITLE=\":: $_PROJECT_STRING_NAME_EXTENDED :: Official SourceForge Software Project Web Page ::\">$_PROJECT_STRING_NAME_EXTENDED</A>&nbsp;|&nbsp;Web-Page Data Generation Time: " . $_KERNEL_WEBPAGE_GENERATION_TIME_TOTAL_TIME . " Seconds&nbsp;|&nbsp;");

/*
 ============================================================================================================
 +
 +
 + Internal Resources :: Network Connections :: Close Connections :: Non-Registered Visitor and Registered Member
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Kill: Database Server Query: Select System Settings
 ============================================================================================================
*/

// [ C ] $_DB_Query_Kernel_Select_System_Settings->free_result();

/*
 ============================================================================================================
 + Kill: Database Server Query: Select Member Credentials
 ============================================================================================================
*/

/*
 ============================================================================================================
 + IF: Check For :: Valid Registered Member Account Credential Data In Browser Cookies
 ============================================================================================================
*/

if ($_GLOBAL_COOKIE_MEMBER_USERNAME && $_GLOBAL_COOKIE_MEMBER_PASSWORD != null) {

	// [ C ] $_DB_Query_Kernel_Select_Member_Credentials->free_result();

} // [ + ] IF: Check For Valid Member Account Credential Data In Browser Cookies

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Resources :: Force Close :: All Database Server Connections
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + ELSE: Database Management System Database Server :: Database Server Name Connection :: Error :: Print Error Message
 ============================================================================================================
*/

} else {

		echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Name: $_ACCESS_DATABASE_SERVER_DATABASE_NAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To :: Database Server Name :: Variable Has Executed

/*
 ============================================================================================================
 + ELSE: Database Management System Database Server :: Database Server Host-Name Connection :: Error :: Print Error Message
 ============================================================================================================
*/

} else {

		echo ("Kernel Message: Error, I Cannot Connect To The Structured Query Language Database Server Host-Name: $_ACCESS_DATABASE_SERVER_HOSTNAME. Please Check The Database Server Access Credentials File.");

} // [ + ] IF: Connection To :: Database Server Hostname :: Variable Has Executed

/*
 ============================================================================================================
 + Close: Database Management System Server :: Database :: Connection
 ============================================================================================================
*/

if ($_KERNEL_MYSQL_IMPROVED_DATABASE_SERVER_CONNECT->close()) {

			echo ("Database Server Connection Closed For Internet Protocol Address: <A HREF=\"$_SYSTEM_SERVER_NETWORKING_RESOLVER_WHOIS/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

/*
 ============================================================================================================
 + Close: Database Management System Server :: Database :: Connection :: Error, Print Message
 ============================================================================================================
*/

} else {

			echo ("Kernel Message: Error: I Cannot Close The Database Server Connection For Internet Protocol Address: <A HREF=\"http://WhoIs.sc/$_GLOBAL_REMOTE_SERVER_ADDRESS\" TITLE=\":: View Detailed Who-Is Information For Internet Protocol Address: $_GLOBAL_REMOTE_SERVER_ADDRESS ::\" TARGET=\"_NEW\">$_GLOBAL_REMOTE_SERVER_ADDRESS</A>&nbsp;|&nbsp;");

} // [ + ] IF: Close: Database Management System Server :: Database :: Connection

echo ("
			This Web Page Will Close After One Hour Of Inactivity
		</CENTER>
	</BODY>

<!--===============================-->
<!--	     DOCUMENT END	   -->
<!--===============================-->

</HTML>
");

/*
 ============================================================================================================
 +
 +
 + [ @ ] Internal Resources :: Flushing and Destroying Programming Code Object Initializations
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Flush and Destroy All Previously Initialized Programming Code Objects
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Flush All Previously Initialized Objects
 ============================================================================================================
*/

ob_end_flush();

/*
 ============================================================================================================
 + Clean All Previously Initialized Objects
 ============================================================================================================
*/

ob_end_clean();

/*
 ============================================================================================================
 + Kill :: Everything Initialized and Running :: System-Wide
 ============================================================================================================
*/

die();
exit();
?>