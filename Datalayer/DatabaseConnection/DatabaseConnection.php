<?php

	/*$testIp = "192.168.20.5";
	$username = "hasi";
	$password = "1234";
	$testDb = "testDatabase";*/

	$testIp = "127.0.0.1";
	$username = "root";
	$password = "";
	$testDb = "testDatabase";

	echo $testIp;

	function DefuseInputs($inputString)
	{
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);
		$unescaped = mysqli_real_escape_string($connection, $inputString);

		return $unescaped;
	}

	function ExecuteReader($sqlStatement)
	{
		//$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
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

	function ExecuteReaderAssoc($sqlStatement)
	{
		//$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']); // nur für einen lokalen Test
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