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
 + - This File, Location	 : Root Directory => System => Configuration
 +				 : => Global_SQL_Server_Database_Class_MySQL_Improved.php
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
 + [ ^ ] System Configuration :: Database Management System Server Database Class :: MyS.Q.L. Driver :: Improved
 +
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 +
 + [ @ ] Class :: Database Management System Server Database :: Driver :: MyS.Q.L. :: Improved :: Variables
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + [ @ ] Class :: Database Management System Server Database :: Driver :: MyS.Q.L. :: Improved :: Initialize
 +
 ============================================================================================================
*/

$_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION			= new mysqli($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_DATABASE_NAME, $_ACCESS_DATABASE_SERVER_HOSTNAME_PORT);

/*
 ============================================================================================================
 +
 +
 + [ @ ] Database Class :: Functions
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Connect
 ============================================================================================================
*/

class DB {

	function connect($_System_Server_DBMS_Database_Function_Connect) {

		$_System_Server_DBMS_Database_Function_Connect			= mysqli_connect($_ACCESS_DATABASE_SERVER_HOSTNAME, $_ACCESS_DATABASE_SERVER_USERNAME, $_ACCESS_DATABASE_SERVER_PASSWORD, $_ACCESS_DATABASE_SERVER_DATABASE_NAME, $_ACCESS_DATABASE_SERVER_HOSTNAME_PORT);
			return $_System_Server_DBMS_Database_Function_Connect;

} // [ + ] Function: Database Management System Server Database :: Connect

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Database Name Selection
 ============================================================================================================
*/

	function select_db($_System_Server_DBMS_Database_Function_Select_Database) {

		$_System_Server_DBMS_Database_Function_Select_Database 		= mysqli_select_db($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION, $_ACCESS_DATABASE_SERVER_DATABASE_NAME);
			return $_System_Server_DBMS_Database_Function_Select_Database;

} // [ + ] Function: Database Management System Server Database :: Connect :: Select Database

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Database Query
 ============================================================================================================
*/

	function query($_System_Server_DBMS_Database_Function_Query) {

		$_System_Server_DBMS_Database_Function_Query			= mysqli_query($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION, $_System_Server_DBMS_Database_Function_Query);
			return $_System_Server_DBMS_Database_Function_Query;

} // [ + ] Function: Database Management System Server Database :: Query

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Database Table Fetch Array
 ============================================================================================================
*/

	function fetch_array($_System_Server_DBMS_Database_Function_Fetch_Array) {

		 $_System_Server_DBMS_Database_Function_Fetch_Array		= mysqli_fetch_array($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION, $_System_Server_DBMS_Database_Function_Fetch_Array);
			return $_System_Server_DBMS_Database_Function_Fetch_Array;

} // [ + ] Function: Database Management System Server Database :: Query :: Fetch Array

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Database Table Fetch Row
 ============================================================================================================
*/

	function fetch_row($_System_Server_DBMS_Database_Function_Fetch_Row) {

		$_System_Server_DBMS_Database_Function_Fetch_Row 		= mysqli_fetch_row($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION, $_System_Server_DBMS_Database_Function_Fetch_Row);
			return $_System_Server_DBMS_Database_Function_Fetch_Row;

} // [ + ] Function: Database Management System Server Database :: Query :: Fetch Row

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Database Table Count Number of Rows
 ============================================================================================================
*/

	function num_rows($_System_Server_DBMS_Database_Function_Number_of_Rows) {

		$_System_Server_DBMS_Database_Function_Number_of_Rows		 = mysqli_num_rows($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION, $_System_Server_DBMS_Database_Function_Number_of_Rows);
			return $_System_Server_DBMS_Database_Function_Number_of_Rows;

} // [ + ] Function: Database Management System Server Database :: Query :: Number of Rows

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Close Connection
 ============================================================================================================
*/

	function close($_System_Server_DBMS_Database_Function_Close_Connection) {

		$_System_Server_DBMS_Database_Function_Close_Connection 	= mysqli_close($_GLOBAL_DATABASE_MANAGEMENT_SYSTEM_SERVER_DATABASE_CONNECTION);
			return $_System_Server_DBMS_Database_Function_Close_Connection;

} // [ + ] Function: Database Management System Server Database :: Query :: Close Connection

/*
 ============================================================================================================
 + Database Class Function: Database Management System Server Database :: Query :: Free Result
 ============================================================================================================
*/

	function free($_System_Server_DBMS_Database_Function_Free_Result) {

		$_System_Server_DBMS_Database_Function_Free_Result		= mysqli_free_result($_System_Server_DBMS_Database_Function_Free_Result);
			return $_System_Server_DBMS_Database_Function_Free_Result;

} // [ + ] Function: Database Management System Server Database :: Query :: Free Result

} // [ + ] Class: Database

/*
 ============================================================================================================
 +
 + [ @ ] Class :: Database Management System Server Database :: Driver :: MyS.Q.L. :: Improved :: Initialize
 +
 ============================================================================================================
*/
?>
