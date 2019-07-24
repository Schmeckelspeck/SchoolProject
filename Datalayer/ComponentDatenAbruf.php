<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

	function GetSpecificComponent($id)
	{
		$sqlStatement = 
		"SELECT
			comp_description,
			comp_note,
			comp_manufacturer,
			comp_warranty_length,
			supl_name,
			room_description,
			room_number,
			coty_name,
			comp_id
		FROM component
		LEFT JOIN component_type ON component_type.coty_id = component.comp_coty_id
		LEFT JOIN room ON room.room_id = component.comp_room_id
		LEFT JOIN supplier ON supplier.supl_id = component.comp_supl_id
		WHERE
			comp_id = ".DefuseInputs($id);

		var_dump($sqlStatement);

		$result = ExecuteReaderAssoc($sqlStatement);
		return $result;
	}

	function GetComponentAttributes($id)
	{
		$sqlStatement = 
		"SELECT  
			coat_name 
		FROM component_attribute
		LEFT JOIN comp_coat ON comp_coat.coca_id = component_attribute.coca_coat_id
		LEFT JOIN component ON component.comp_id = coca_comp_id
		WHERE component.comp_id = ".DefuseInputs($id).";"; // Hier den Platzhalter;

		$result = ExecuteReaderAssoc($sqlStatement); // Hier die Parameter reinsetzen;
		return $result;
	}

	function GetAllComponentAttributes()
	{
		$sqlStatement = 
		"SELECT coat_name FROM component_attribute;";
		$result = ExecuteReaderAssoc($sqlStatement);
		return $result;
	}

	function UpdateComponentDataChanges($id, $description, $type, $attribut, $warranty_end, $note, $supplier, $room_id)
	{
		$sqlStatement = "";
	}
?>