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
			'coty_name',
			'comp_id'
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

	function GetComponentAttributes($id)
	{
		$sqlStatement = 
		"SELECT  
			coat_name 
		FROM component_attribute
		INNER JOIN comp_coat ON comp_coat.coca_id = component_attribute.coca_coat_id
		INNER JOIN component ON component.comp_id = coca_comp_id
		WHERE component.comp_id = ".$id.";";

		$result = ExecuteReaderAssoc($sqlStatement, 'testDb');
		$result = array(
			array('coat_name'=>'Ein Attribut1'),
			array('coat_name'=>'Ein Attribut2'),
			array('coat_name'=>'Ein Attribut3'),
			array('coat_name'=>'Ein Attribut4'),
			array('coat_name'=>'Ein Attribut5'),
		);
		return $result;
	}

	function UpdateComponentDataChanges($id, $description, $type, $attribut, $warranty_end, $note, $supplier, $room_id)
	{
		$sqlStatement = "";
	}
?>