<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	//require_once("../Controllers/BEZEICHNUNGController.php");
	require_once("../Controllers/roomController.php");

?>

<?php 
		
		if($allRooms != NULL && sizeof($allRooms > 0))
		{
			echo "<table class='table'>
			<thead>
				<tr>
				<th scope='col'>Raumname</th>
				<th scope='col'>Raumbezeichnung</th>
				<th scope='col'>Bemerkung</th>
				</tr>
			</thead>";
			echo "<tbody>";

			foreach($allRooms as $room)
			{

				//
				//Hier müssen noch die Attribute angepasst werden

				echo "<tr>";
				echo "<td> R.".$room['room_number']."</td>";
				echo "<td>".$room['room_description']." (Raum-Nr.: ".$room['room_number'].")</td>";
				echo "<td>".$room['room_note']."</td>";
				echo "</tr>";
				
			}
			echo "</tbody>";
			echo "</table>";
		}
		else
		{
			echo "Es konnten keine Daten ermittelt werden.";
		}
	?>


<br>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>