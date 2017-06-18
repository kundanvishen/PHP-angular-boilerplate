<?php
	/************************************************************************************************
	    File 		: commonFunctions.php
		File Use	: contains common Functions which are used through out the API
	************************************************************************************************/
ini_set('max_execution_time', 300); 
include_once('./ServerConfigC.php');

// error_reporting(~0);
// ini_set('display_errors', 1);

/**
* @description: verify accessToken, authentication module
*
* @param {param1} param1 : useful parameter 1
* @param {param2} authKey : useful parameter 2
*/
function doSomething ($param1 = '', $param2 = '') {
	return $param1 + $param2;
} // doSomething();

?>