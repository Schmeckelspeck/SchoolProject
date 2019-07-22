<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/ComponentsController.php");
?>
	<?php 
		if(sizeof($allComponents > 0) && $allComponents != NULL)
		{
			echo"<table>
			<thead>
				<tr>
					<td>Bezeichnung</td>
					<td>Gewährleistungsdauer</td>
					<td>Typ</td>
					<td>Raum</td>
				</tr>
			</thead>";
			foreach($allComponents as $component)
			{
					echo "<tr>";
						echo "<td><a href='ComponentView.php?idComponent=".$component['comp_id']."'>".$component['comp_description']."</a></td>";
						echo "<td>".$component['comp_warranty_end']."</td>";
						echo "<td>".$component['coty_name']."</td>";
						echo "<td>".$component['room_description']." (Raum-Nr.: ".$component['room_number'].")</td>";
					echo "</tr>";
			}
			echo "</table>";
		}
		else
		{
			echo "Es konnten keine Daten ermittelt werden.";
		}
		
	?>


<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>