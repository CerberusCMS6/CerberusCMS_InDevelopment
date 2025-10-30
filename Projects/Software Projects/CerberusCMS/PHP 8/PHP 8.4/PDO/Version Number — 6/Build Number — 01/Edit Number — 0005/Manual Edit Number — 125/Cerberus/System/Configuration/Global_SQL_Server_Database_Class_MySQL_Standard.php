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
 +				 : => Global_SQL_Server_Database_Class_MySQL_Standard.php
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
 + Cerberus :: System Configuration :: Global S.Q.L. Server Database Class :: MyS.Q.L. Driver :: Standard
 +
 +
 ============================================================================================================
*/

/*
 ============================================================================================================
 +
 + Database Class :: Functions
 +
 ============================================================================================================
*/


/*
 ============================================================================================================
 + Database Class Function: Database Server Connect
 ============================================================================================================
*/

class DB {

	function connect($_QUERY) {

		$_QUERY = mysql_connect($_QUERY) or die(mysql_error());
			return $_QUERY;

} // [ + ] Function: Database Server Connect

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Name Selection
 ============================================================================================================
*/

	function connect_db($_QUERY) {

		$_QUERY = mysql_select_db($_QUERY) or die(mysql_error());
			return $_QUERY;

} // [ + ] Function: Database Server Connect To Database Name

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Query
 ============================================================================================================
*/

	function query($_QUERY) {

		$_QUERY = mysql_query($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Array
 ============================================================================================================
*/

	function fetch_array($_QUERY) {

		 $_QUERY = mysql_fetch_array($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Fetch Array

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Fetch Row
 ============================================================================================================
*/

	function fetch_row($_QUERY) {

		$_QUERY = mysql_fetch_row($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Fetch Row

/*
 ============================================================================================================
 + Database Class Function: Database Server Database Table Count Number of Rows
 ============================================================================================================
*/

	function num_rows($_QUERY) {

		$_QUERY = mysql_num_rows($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server Query: Number of Rows

/*
 ============================================================================================================
 + Database Class Function: Database Server Close Connection
 ============================================================================================================
*/

	function close($_QUERY) {

		$_QUERY = mysql_close($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server: Close Connection

/*
 ============================================================================================================
 + Database Class Function: Database Server Free Result
 ============================================================================================================
*/

	function free($_QUERY) {

		$_QUERY = mysql_free_result($_QUERY);
			return $_QUERY;

} // [ + ] Function: Database Server: Free Result

} // [ + ] Class: Database
?>