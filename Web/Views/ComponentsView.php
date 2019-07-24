<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/ComponentsController.php");
?>
	<?php 
<<<<<<< HEAD
		echo $allComponents;
=======

		echo "<div class='input-group mb-3'>
		<div class='input-group-prepend'>
		  <button class='btn btn-outline-secondary dropdown-toggle' type='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Dropdown</button>
		  <div class='dropdown-menu'>
			<a class='dropdown-item' href='#'>Attribute 1</a>
			<a class='dropdown-item' href='#'>Attribute 2</a>
			<a class='dropdown-item' href='#'>Attribute 3</a>
		  </div>
		</div>
		<input type='text' class='form-control' aria-label='Text input with dropdown button'>
	  </div>";

		echo "<div class='row'>";
>>>>>>> f34d33e94deccaae16106f3ead505f2ce117b089
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
<<<<<<< HEAD
				echo "<td><a href='ComponentView.php?idComponent=".$component['comp_id']."'>".$component['comp_description']."</a></td>";
=======
				echo "<td><a href='Layout.php?view=1&idComponent=".$component['comp_id']."'>".$component['comp_description']."</a></td>";
>>>>>>> c9154f5edfa46c12721146916a403c1f92863403
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