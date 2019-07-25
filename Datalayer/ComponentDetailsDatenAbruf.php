<?php
	require_once("DatabaseConnection/DatabaseConnection.php");

	/*
 
   GGGG  EEEEEEE TTTTTTT 
  GG  GG EE        TTT   
 GG      EEEEE     TTT   
 GG   GG EE        TTT   
  GGGGGG EEEEEEE   TTT   
                         
 
*/

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
			room_id,
			room_description,
			room_number,
			comp_coty_id,
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
			coat_id, 
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
		"SELECT coat_id, coat_name FROM component_attribute;";
		$result = ExecuteReaderAssoc($sqlStatement);
		return $result;
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
	 * @param {String} $coty_id - the id of a Component-Type
	 * 
	 * @returns an array of attributes for the given type
	 */
	function getAttributesForType( $coty_id )
	{
		
		$sqlStatement =	"SELECT coat_id, coat_name
			FROM component_attribute
			INNER JOIN coty_coat ON coat_id = coco_coat_id
			INNER JOIN component_type ON coco_coty_id = coty_id
			WHERE coty_id = $coty_id;";

		$result = ExecuteReaderAssoc($sqlStatement);

		return $result;
	}

/**
 * @returns a table of all the softwares used in all the rooms
 */
function getSoftwareInAllRooms($component_id)
{
	$sqlStatement = 
	"SELECT	room_id, room_number, comp_id, comp_description, coca_id, coca_value,
			FROM component
			INNER JOIN comp_coat ON comp_id = coca_comp_id,
			INNER JOIN component_attribute ON coca_coat_id = coat_id,
			INNER JOIN room ON comp_room_id = room_id
			WHERE coat_name = 'licencekey' 
			/*AND comp_id = $component_id*/
			;";

	$result = ExecuteReaderAssoc($sqlStatement);

	return $result;

}

/*
 
 PPPPPP   OOOOO   SSSSS  TTTTTTT 
 PP   PP OO   OO SS        TTT   
 PPPPPP  OO   OO  SSSSS    TTT   
 PP      OO   OO      SS   TTT   
 PP       OOOO0   SSSSS    TTT   
                                 
 
*/

/**
 * creates a new Component with the given data
 * 
 * @param {Object} $componentData - contains all the information about the Component that are neccessary to create a Component
 * 
 * @returns the created Component
 */
function postComponent( $componentData )
{
	$sqlStatement =	
		"INSERT INTO component (	
				comp_description,
				comp_manufacturer,
				comp_warranty_length,
				comp_purchase_date,
				comp_note,
				comp_supl_id,
				comp_room_id,
				comp_coty_id,
			)	VALUES	(
				$componentData->comp_description,
				$componentData->comp_manufacturer,
				$componentData->comp_warranty_length,
				$componentData->comp_purchase_date,
				$componentData->comp_note,
				$componentData->comp_supl_id,
				$componentData->comp_room_id,
				$componentData->comp_coty_id,
			);";

	$result = ExecuteReaderAssoc($sqlStatement);

	return $result;
}

function createMultipleComponentsOfSameSort( $data, $amount )
{
	for ($count=0; $count < $amount; $count++) { 
		postComponent($data);
	}
}

/**
 * creates a new Component with the given data
 * 
 * @param {Object} $componentAttributes - contains all the information about the Component-Attributes that are neccessary to create a Component-attribute
 * 
 * @returns the created Component
*/
	function postComponentAttributes( $componentAttributes )
	{
		$sqlStatement =	
		"INSERT INTO comp_coat (
				coca_value,
				coca_comp_id,
				coca_coat_id
			) VALUES (
				$componentAttributes->coca_value,
				$componentAttributes->coca_comp_id,
				$componentAttributes->coca_coat_id
			);";

$result = ExecuteReaderAssoc($sqlStatement);

return $result;
}

/**
 * assign Software to a specific Room so that all Components in that room are able to use that software
 * 
 * @param {Integer} $softwareId - the id of the software to be assigned
 * @param {Integer} $roomId - the id of the room 
 * 
 * 
 * @returns
 */
function assignSoftwareToRoom($softwareId, $roomId)
{
	$sqlStatement =	
	"INSERT INTO comp_room_software (
				crso_comp_id, 
				crso_room_id
			) VALUES (
				$softwareId,
				$roomId
			);";

	$result = ExecuteReaderAssoc($sqlStatement);

	return $result;
}

/*
 
 UU   UU PPPPPP  DDDDD     AAA   TTTTTTT EEEEEEE 
 UU   UU PP   PP DD  DD   AAAAA    TTT   EE      
 UU   UU PPPPPP  DD   DD AA   AA   TTT   EEEEE   
 UU   UU PP      DD   DD AAAAAAA   TTT   EE      
  UUUUU  PP      DDDDDD  AA   AA   TTT   EEEEEEE 
                                                 
 
*/

	/**
	 * @param {Object} $componentChanges
	 */
	function UpdateComponentDataChanges($componentChanges)
	{
		$sqlStatement = 
			"UPDATE component 
			SET
				comp_description = $componentChanges->comp_description,
				comp_manufacturer = $componentChanges->comp_manufacturer,
				comp_warranty_length = $componentChanges->comp_warranty_length,
				comp_purchase_date = $componentChanges->comp_purchase_date,
				comp_note = $componentChanges->comp_note,
				comp_supl_id = $componentChanges->comp_supl_id,
				comp_room_id = $componentChanges->comp_room_id,
				comp_coty_id = $componentChanges->comp_coty_id, 
			WHERE comp_id = $componentChanges->comp_id;";

		$result = ExecuteReaderAssoc($sqlStatement);

		return $result;

	}

	/*
 
 DDDDD   EEEEEEE LL      EEEEEEE TTTTTTT EEEEEEE 
 DD  DD  EE      LL      EE        TTT   EE      
 DD   DD EEEEE   LL      EEEEE     TTT   EEEEE   
 DD   DD EE      LL      EE        TTT   EE      
 DDDDDD  EEEEEEE LLLLLLL EEEEEEE   TTT   EEEEEEE 
                                                 
 
*/



?>