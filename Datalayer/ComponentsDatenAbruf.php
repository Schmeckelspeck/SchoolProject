<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function GetComponents()
	{
		$sqlStatement = 
		"SELECT 
			comp_id,
			comp_description,
			comp_warranty_end,
			coty_name,
			room_description,
			room_number
		FROM component
		INNER JOIN room ON room.room_id = component.room_id
		INNER JOIN component_type ON component_type.coty_id = component.comp_coty_id;";

		$result = ExecuteReaderAssoc($sqlStatement, "testdb");
		$result = array
		(
			array
			(
				'comp_id'=>'666',
				'comp_description'=>'AMD Radeon RX 590 8Gb',
				'comp_warranty_end'=>'2019-10-02',
				'coty_name'=>'Grafikkarte',
				'room_description'=>'Computer-Raum C',
				'room_number'=>'6'
			),
			array
			(
				'comp_id'=>'668',
				'comp_description'=>'AMD Radeon RX 580 4Gb',
				'comp_warranty_end'=>'2020-10-02',
				'coty_name'=>'Grafikkarte',
				'room_description'=>'Computer-Raum D',
				'room_number'=>'7'
			),
			array
			(
				'comp_id'=>'669',
				'comp_description'=>'i7-6600K',
				'comp_warranty_end'=>'2020-11-12',
				'coty_name'=>'CPU',
				'room_description'=>'Computer-Raum C',
				'room_number'=>'6'
			)
		);
		return $result;
	}
?>