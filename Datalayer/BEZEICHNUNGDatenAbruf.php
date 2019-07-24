<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

	function DisarmInputs($inputString)
	{
		$connection = mysqli_connect("127.0.0.1", "root", "");
		$unescaped = mysqli_real_escape($connection, $inputString);

		return $unescaped;
	}

	function GetSpecificData()
	{
		$sqlStatement = "SELECT SQLSTATEMENT FROM DATABASE";
		return "<br>Das hier kommt aus BEZEICHNUNGDatenAbruf.php, und greift auf DatenbankZugriff.php";
	}
?>