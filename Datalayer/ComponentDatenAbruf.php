<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function GetSpecificComponent($id)
	{
		$sqlStatement = 
		"SELECT
			'comp_description',
			'comp_note',
			'comp_manufacturer',
			'comp_warranty_end',
			'comp_created',
			'supl_name',
			'room_description',
			'room_number',
			'coty_name'
		FROM component
		INNER JOIN component_type ON component_type.coty_id = component.coty_id
		INNER JOIN room ON room.room_id = component.room_id
		INNER JOIN supplier ON supplier.supplier_id = component.comp_suppl_id
		WHERE
			comp_id = ".$id;

		$result = ExecuteReaderAssoc($sqlStatement, "testdb");
		$result = array
		(
			'comp_description'=>'i5-6500U',
			'comp_note'=>'Das ist eine CPU.',
			'comp_manufacturer'=>'Intel',
			'comp_warranty_end'=>'2018-01-20',
			'comp_created'=>'2016-02-02',
			'supl_name'=>'MindFactory',
			'room_description'=>'Computer-Raum',
			'room_number'=>'1234',
			'coty_name'=>'CPU'
		);
		return $result;
	}

	function UpdateComponentDataChanges($id, $description, $type, $attribut, $warranty_end, $note, $supplier, $room_id)
	{
		$sqlStatement = "";
	}
?>