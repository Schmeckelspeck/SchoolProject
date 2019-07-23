<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

	function GetFilterOptions()
	{
		$filterOptions = array(
			'comp_description',
			'comp_warranty_end',
			'coty_name',
			'room_description',
			'room_number'
		);
		return $filterOptions;
	}

	// Pass filter parameters to this function. It will return the filtered selection.
	function GetComponents($filterText, $filterArt) // $filterText, $filterArt
	{
		// TestData
		$filterText = "";
		$filterArt = "";
		// TestData Ende

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
			$sqlStatement = $sqlStatement." WHERE ".$filterArt." LIKE '%".$filterText."%'";
		}
		
		$sqlStatement = $sqlStatement.";";

		var_dump($sqlStatement);
		
		$result = ExecuteReaderAssoc($sqlStatement);
		return $result;
	}
?>