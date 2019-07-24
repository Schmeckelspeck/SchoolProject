<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/ComponentsController.php");
?>


	<?php 

		echo "<div class='input-group-append style='float: right;'>
		<select>
			<option value='att1'>Attribut 1</option>
			<option value='att2'>Attribut 2</option>
			<option value='att3'>Attribut 3</option>
			<option value='att4'>Attribut 4</option>
		</select>
		<input type='text' class='form-control' aria-label='Text input with dropdown button'>
	  	</div>";

		echo "<div class='row'>";
		if(sizeof($allComponents > 0) && $allComponents != NULL)
		{
			echo "<table class='table'>
			<thead>
				<tr>
				<th scope='col'>#</th>
				<th scope='col'>Bezeichnung</th>
				<th scope='col'>Gewährleistungsdauer</th>
				<th scope='col'>Typ</th>
				<th scope='col'>Raum</th>
				</tr>
			</thead>";
			echo "<tbody>";

			foreach($allComponents as $component)
			{
				echo "<tr>";
				echo "<th scope='row'>".$component['comp_id']."</th>";
				echo "<td><a href='Layout.php?view=1&idComponent=".$component['comp_id']."'>".$component['comp_description']."</a></td>";
				echo "<td>".$component['comp_warranty_end']."</td>";
				echo "<td>".$component['coty_name']."</td>";
				echo "<td>".$component['room_description']." (Raum-Nr.: ".$component['room_number'].")</td>";
				echo "</tr>";
				
			}
			echo "</tbody>";
			echo "</table>";
		}
		else
		{
			echo "<table class='table'>
			<thead>
				<tr>
				<th scope='col'>#</th>
				<th scope='col'>Bezeichnung</th>
				<th scope='col'>Gewährleistungsdauer</th>
				<th scope='col'>Typ</th>
				<th scope='col'>Raum</th>
				</tr>
			</thead>";
			echo "<tbody>";
		}
		echo "</div>";
		
	?>
	<input type="submit" name="btnCreateNewComponent" value="Neue Komponente anlegen" />


<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>
