<?php
	// Beispiele mit mysqli aus AWP
	//
	
	function ExecuteReader($sqlStatement)
	{
		$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
		mysqli_select_db($connection, 'testDatabase');

		$dataRows = [];

		$result = mysqli_query($connection, $sqlStatement);

		while($data = mysqli_fetch_row($result))
		{
			array_push($dataRows, $data);
		}
		mysqli_close($connection);
		return $dataRows;
	}

	function ExecuteReaderAssoc($sqlStatement)
	{
		$connection = mysqli_connect("192.100.100.12", "hasi", "1234");
		mysqli_select_db($connection, 'testDatabase');

		$dataRows = [];
		
		$result = mysqli_query($connection, $sqlStatement);
		
		while($data = mysqli_fetch_assoc($result))
		{
			array_push($dataRows, $data);
		}
		mysqli_close($connection);
		return $dataRows;
	}

	function ExecuteWriter($sqlStatement, $dbName)
	{
		$connection = mysqli_connect($CONFIG_mysqlIp, $CONFIG_userName, $CONFIG_passWord);
		mysqli_select_db($connection, $dbName);

		$wasSuccessful = mysqli_query($connection, $sqlStatement);
		mysqli_close($connection);

		return $wasSuccessful;
	}
	
?>