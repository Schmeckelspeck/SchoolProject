<?php
	require_once("../../config.php");

	// Please change connection configs in the file config.php.
	// You'll find this file in the root directory of this application.
	$testIp = $GLOBALS['CONFIG_APACHEIP'];
	$username = $GLOBALS['CONFIG_USERNAME'];
	$password = $GLOBALS['CONFIG_PASSWORD'];
	$testDb = $GLOBALS['CONFIG_DATABASENAME'];

	// Since some parts of the code build sql-strings on the fly, this function is necessary to prevent SQL-injection
	// Using this function is necessary since a user with bad intentions could try to manipulate the database.
	// The function establishes a data base connection and returns an escaped transformation of the input string.
	function DefuseInputs($inputString)
	{
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);
		$unescaped = mysqli_real_escape_string($connection, $inputString);

		return $unescaped;
	}

	// This function returns an array-result which can be processed through iteration.
	function ExecuteReader($sqlStatement)
	{
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']); // nur für einen lokalen Test
		mysqli_select_db($connection, $GLOBALS['testDb']);

		$dataRows = array();

		$result = mysqli_query($connection, $sqlStatement);
		if($result)
		{
		while($data = mysqli_fetch_row($result))
		{
			array_push($dataRows, $data);
		}
		mysqli_close($connection);
		}
		else 
		{
			$dataRows = array();
		}
		return $dataRows;
	}

	// This function delivers an associative array. Developers can access the values with the right key, for instance result['columnName'].
	function ExecuteReaderAssoc($sqlStatement)
	{
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);

		$dataRows = array();

		$result = mysqli_query($connection, $sqlStatement);

		if($result)
		{
			while($data = mysqli_fetch_assoc($result))
			{
				array_push($dataRows, $data);
			}
			mysqli_close($connection);
		}
		else
		{
			$dataRows = array();
		}
		return $dataRows;
	}

	// This function can be used to insert data into the database.
	function ExecuteWriter($sqlStatement)
	{
		//$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
		$connection = mysqli_connect($testIp, $username, $password);
		mysqli_select_db($connection, $db);
		mysqli_query($connection, $sqlStatement);
		$last_ID=mysqli_insert_id($connection);
		mysqli_close($connection);
		return $last_ID;
	}
	
?>