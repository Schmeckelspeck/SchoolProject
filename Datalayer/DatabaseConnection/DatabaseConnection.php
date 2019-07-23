<?php
	require_once("../../config.php");
	//$conn=mysqli_connect('192.168.4.14','hasi','1234')or die ("could not connect to mysql");
	//mysqli_select_db($conn,'test_Component');
	/*$result=mysqli_query($conn,'Select * from component');
	mysqli_fetch_array($result);
	var_dump($result);*/
	//$Data=mysqli_fetch_array($Result);
?>

<?php
	// Beispiele mit mysqli aus AWP
	//
	
	/*function ExecuteReader($sqlStatement)
	{
		$connection = mysqli_connect('192.168.4.14','hasi', '1234');
		mysqli_select_db($connection, $CONFIG_dataBaseName);

		$dataRows = [];

		$result = mysqli_query($connection, $sqlStatement);

		while($data = mysqli_fetch_row($result))
		{
			array_push($dataRows, $data);
		}
		mysqli_close($connection);
		return $dataRows;
	}*/

	function ExecuteReaderAssoc($sqlStatement, $dbName)
	{
		$connection = mysqli_connect("127.0.0.1", "root", "");
		mysqli_select_db($connection, $dbName);
		
		//$dataRows = [];
		
		//$result = mysqli_query($connection, $sqlStatement);
		
		//while($data = mysqli_fetch_assoc($result))
		//{
	//		array_push($dataRows, $data);
	//	}
//		mysqli_close($connection);
//		return $dataRows;
	}
/*
	function ExecuteWriter($sqlStatement, $dbName)
	{
		$connection = mysqli_connect($CONFIG_mysqlIp, $CONFIG_userName, $CONFIG_passWord);
		mysqli_select_db($connection, $dbName);

		$wasSuccessful = mysqli_query($connection, $sqlStatement);
		mysqli_close($connection);

		return $wasSuccessful;
	}
	*/
?>