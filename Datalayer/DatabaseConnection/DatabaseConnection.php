<?php
	$ipDataBase = "192.100.100.12";
	$userName = "hasi";
	$password = "1234";
	$db = "testDatabase";

	function DefuseInputs($inputString)
	{
		$connection = mysqli_connect($ipDataBase, $userName, $password);
		$unescaped = mysqli_real_escape_string($connection, $inputString);

		return $unescaped;
	}

	function ExecuteReader($sqlStatement)
	{
		//$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
		$connection = mysqli_connect($ipDataBase, $userName, $password); // nur für einen lokalen Test
		mysqli_select_db($connection, $db);

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
		$connection = mysqli_connect($ipDataBase, $userName, $password); // nur für einen lokalen Test
		mysqli_select_db($connection, $db);

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
		$connection = mysqli_connect($ipDataBase, $userName, $password);
		mysqli_select_db($connection, $db);
		mysqli_query($connection, $sqlStatement);
		$last_ID=mysqli_insert_id($connection);
		mysqli_close($connection);
		return $last_ID;
	}
	
?>