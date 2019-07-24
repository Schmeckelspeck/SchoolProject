<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/BEZEICHNUNGController.php");
	require_once("../Controllers/ComponentsController.php");

?>

<?php 
		echo "<table class='table'>
		<thead>
			<tr>
			<th scope='col'>Firma</th>
			<th scope='col'>Strasse</th>
			<th scope='col'>Ort</th>
			<th scope='col'>PLZ</th>
			<th scope='col'>Tel</th>
			<th scope='col'>E-mail</th>
			</tr>
		</thead>";
		echo "<tbody>";

		foreach($allComponents as $component)
		{

			//
			//Hier müssen noch die Attribute angepasst werden

			echo "<tr>";
			echo "<th scope='row'>".$component['comp_id']."</th>";
			echo "<td><a href='ComponentView.php?idComponent=".$component['comp_id']."'>".$component['comp_description']."</a></td>";
			echo "<td>".$component['comp_warranty_length']."</td>";
			echo "<td>".$component['coty_name']."</td>";
			echo "<td>".$component['room_description']." (Raum-Nr.: ".$component['room_number'].")</td>";
			echo "</tr>";
			
		}
		echo "</tbody>";
		echo "</table>";
	
		echo "<div class='col'>
			<button type='button' class='btn btn-dark'>Lieranten hinzufügen</button>
		</div>";
	?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>