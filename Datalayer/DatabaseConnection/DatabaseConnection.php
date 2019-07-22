<?php
	require_once("../../config.php");
?>

<?php
	function BeispielAusDbZugriffReader($sqlQueryStatement)
	{
		$sqlStatement = $sqlQueryStatement;

		// ...

		return "<br>Das hier wären Daten aus der Datenbank.";
	}

	function BeispielAusDbZugriffWriter($sqlInsertUpdateStatement)
	{
		$sqlStatement = $sqlInsertUpdateStatement;

		// ...

		echo "<br>Jetzt wäre in die Datenbank geschrieben worden.";
	}

	// Beispiele mit mysqli aus AWP
	//
	/*
	function ExecuteReader($sqlStatement, $dbName)
	{
		$connection = mysqli_connect($CONFIG_mysqlIp, $CONFIG_userName, $CONFIG_passWord);
		mysqli_select_db($connection, $dbName);

		$dataRows = [];

		$result = mysqli_query($connection, $sqlStatement);

		while($data = mysqli_fetch_row($result))
		{
			array_push($dataRows, $data);
		}
		mysqli_close($connection);
		return $dataRows;
	}

	function ExecuteReaderAssoc($sqlStatement, $dbName)
	{
		$connection = mysqli_connect($CONFIG_mysqlIp, $CONFIG_userName, $CONFIG_passWord);
		mysqli_select_db($connection, $dbName);

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
	*/
?>