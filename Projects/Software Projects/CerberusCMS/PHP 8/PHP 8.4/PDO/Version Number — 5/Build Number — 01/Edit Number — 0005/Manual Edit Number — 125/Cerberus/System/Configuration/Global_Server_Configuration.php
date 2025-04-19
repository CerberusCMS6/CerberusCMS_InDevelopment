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
 + - This File, Location	 : Root Directory => System => Configuration => Global_Server_Configuration.php
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
 + System :: Configuration :: Global Server Configuration
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Server :: Configuration :: Variables :: Strings
 +
 ============================================================================================================
*/

$_ACCESS_DATABASE_SERVER_HOSTNAME 						= "";
$_ACCESS_DATABASE_SERVER_HOSTNAME_PORT	 					= "";
$_ACCESS_DATABASE_SERVER_USERNAME 						= "";
$_ACCESS_DATABASE_SERVER_PASSWORD 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_NAME 						= "";
$_ACCESS_DATABASE_SERVER_DATABASE_TABLE_PREFIX 					= "";

/*
 ============================================================================================================
 +
 + Pre-Hyper-Text-Post-Processor :: Engine :: Configuration
 +
 ============================================================================================================
*/

$_ACCESS_PHP_ENGINE_VERSION							= "5";
$_ACCESS_SQL_ENGINE_VERSION							= "1";

/*
 ============================================================================================================
 +
 + Web Server :: Configuration :: Connection
 +
 ============================================================================================================
*/

$_ACCESS_URL_CLEARTEXT 								= "";
$_ACCESS_URL_SECURE								= "";
$_ACCESS_URL_SECURE_SSL								= "";
$_ACCESS_URL_SECURE_SSL_CUSTOM							= "";
$_ACCESS_URL_SECURE_SSL_OPENSSL							= "";
$_ACCESS_URL_SECURE_TLS								= "";
$_ACCESS_URL_SECURE_TLS_CUSTOM							= "";

/*
 ============================================================================================================
 +
 + Web Server :: Configuration :: Uniform-Resource-Locations and Uniform-Resource-Location Paths
 +
 ============================================================================================================
*/

/*
 ==================================================
 + GIT :: Repository :: Applications
 ==================================================
*/

$_ACCESS_URL_GIT_REPOSITORY_APPLICATIONS					= "";

/*
 ==================================================
 + GIT :: Repository :: Kernel
 ==================================================
*/

$_ACCESS_URL_GIT_REPOSITORY_KERNEL						= "";

/*
 ==================================================
 + GIT :: Repository :: Plug-Ins
 ==================================================
*/

$_ACCESS_URL_GIT_REPOSITORY_PLUGINS						= "";

/*
 ==================================================
 + GIT :: Repository :: Themes
 ==================================================
*/

$_ACCESS_URL_GIT_REPOSITORY_THEMES						= "";

/*
 ============================================================================================================
 +
 + System :: Configuration :: Electronic Mail Addresses and Electronic Mail Message Encryption
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Addresses
 ============================================================================================================
*/

$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ADMINISTRATOR				= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_ROOT					= "";
$_ACCESS_ELECTRONIC_MAIL_ADDRESS_SYSTEM_SERVICES				= "";

/*
 ============================================================================================================
 + System :: Configuration :: Electronic Mail Message Encryption
 ============================================================================================================
*/

$_SYSTEM_SETTINGS_STATUS_ENCRYPTION_PGP_ELECTRONIC_MAIL_MESSAGE			= "1";
$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC_1	= "";
$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC_2	= "";
$_SYSTEM_SETTINGS_ENCRYPTION_ELECTRONIC_MAIL_MESSAGE_PGP_KEY_PANEL_PUBLIC_3	= "";

/*
 ============================================================================================================
 +
 + System :: Configuration :: Passwords
 +
 ============================================================================================================
*/

$_SYSTEM_SETTINGS_PASSWORD_MAINTENANCE						= "";
?>