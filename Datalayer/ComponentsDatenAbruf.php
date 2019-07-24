<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function GetFilterOptions()
	{
		$filterOptions = array(
			'comp_description'=>'Beschreibung',
			'comp_warranty_length'=>'Gewährleistungsdauer (in Monaten)',
			'coty_name'=>'Typ',
			'room_description'=>'Raum',
			'room_number'=>'Raumnummer'
		);
		return $filterOptions;
	}

	// Pass filter parameters to this function. It will return the filtered selection.
	function GetComponents($filterText, $filterArt) // $filterText, $filterArt
	{
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
		
		$dataRows = ExecuteReaderAssoc($sqlStatement);

		return $dataRows;
	}

/***
 * ------------------------------------------
--GET data
SELECT supl_id, supl_name
FROM supplier;

SELECT room_id, room_number
FROM room;

SELECT coty_id, coty_name
FROM component_type;

--provides all component attributes for component type
SELECT coat_id, coat_name
FROM component_attribute
INNER JOIN coty_coat ON coat_id = coco_coat_id
INNER JOIN component_type ON coco_coty_id = coty_id
WHERE coty_id = ?;

--PUT data
INSERT INTO component(	comp_description,
						comp_manufacturer,
						comp_warranty_length,
						comp_purchase_date,
						comp_note,
						comp_supl_id,
						comp_room_id,
						comp_coty_id,
					)
					VALUES
					(?,?,?,?,?,?,?,?,?);

INSERT INTO comp_coat	(
						coca_value,
						coca_comp_id,
						coca_coat_id
						)
						VALUES
						(?,?,?);
--------------------------------------------
 * 
 */
?>
