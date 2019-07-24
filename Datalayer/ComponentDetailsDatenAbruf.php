<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

	// This function returns a specific component, filtered by the component's id.
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
		WHERE component.comp_id = ".DefuseInputs($id).";";

		$result = ExecuteReaderAssoc($sqlStatement);
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

	/**
	 * @returns an array of the types which can be chosen
	 */
	function GetAllComponentTypes ()
	{
		
		$sqlStatement = "SELECT coty_id, coty_name FROM component_type;";

		$result = ExecuteReaderAssoc($sqlStatement);

		return $result;
	}

	/**
	 * when choosing a Type get the attributes for it an return them as an array
	 * 
	 * @returns an array of attributes for the given type
	 */
	function getAttributesForType ($coty_id)
	{

		$sqlStatement =	"SELECT coat_id, coat_name
			FROM component_attribute
			INNER JOIN coty_coat ON coat_id = coco_coat_id
			INNER JOIN component_type ON coco_coty_id = coty_id
			WHERE coty_id = $coty_id;";

		$result = ExecuteReaderAssoc($sqlStatement);

		return $result;
	}
?>