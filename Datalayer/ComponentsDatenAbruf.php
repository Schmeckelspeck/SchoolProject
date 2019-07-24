<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

	function GetFilterOptions()
	{
		$filterOptions = array(
			'comp_description',
			'comp_warranty_length',
			'coty_name',
			'room_description',
			'room_number'
		);
		return $filterOptions;
	}

	// Pass filter parameters to this function. It will return the filtered selection.
	function GetComponents($filterText, $filterArt) // $filterText, $filterArt
	{
		$connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']); // nur für einen lokalen Test
		mysqli_select_db($connection, $GLOBALS['testDb']);

		$sqlStatement = 
		"SELECT 
			comp_id,
			comp_description,
			comp_warranty_length,
			coty_name,
			room_description,
			room_number
		FROM component
		LEFT JOIN room ON room.room_id = component.comp_room_id 
		LEFT JOIN component_type ON component_type.coty_id = component.comp_coty_id";

		if($filterArt !== null && $filterArt !== "")
		{
			$sqlStatement = $sqlStatement." WHERE ".DefuseInputs($filterArt)." LIKE '%".DefuseInputs($filterText)."%'";
		}

		$sqlStatement = $sqlStatement.";";
		
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
?>