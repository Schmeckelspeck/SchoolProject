<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/ComponentsController.php");
?>


<?php 
	echo 
	"
	<div class='input-group-prepend'>
	<form action='Layout.php?view=0' method='post'>	
		<div class='row'>
			<div class=''>
				
				<select class='form-control' name='selectField'>";

					foreach($allComponentsFilterOptions as $attribute)
					{
						foreach($allFilterOptionsKeys as $key)
						{
							if($allComponentsFilterOptions[$key] === $attribute)
							{
								echo "<option value='".$key."' > $attribute</option>";
								
							}
												
						}
					}
				echo "</select>
			</div>
			<div class=''>
				<input type='text' class='form-control' style='width: 15rem;' aria-label='Text input with dropdown button' name='filterField'>
			</div>
			<div class=''>
				<input class='btn btn-dark' type='submit' value='Suchen'>
			</div>
			<div>
				<input class='btn btn-dark' type='submit' style=' margin-left: 66px;' name='btnCreateNewComponent' value='Neue Komponente anlegen' />
			</div>
		</div>
	</form>  
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
			echo "<td>".$component['comp_warranty_length']."</td>";
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
<?php

	// Hallo: Ich habe hier etwas geändert.
	// Vorher war einfach der input-Button da, jetzt wird er über echo erzeugt.
	// Die Logik hier soll sein: Wenn der User die Rolle "Admin" hat, nur dann darf er überhaupt zu "CreateComponent" wechseln.
	// Ansonsten soll dieser Button erst gar nicht sichtbar sein.
	// Bitte anpassen, falls das eleganter geht.
	if(isset($_SESSION['user_role']))
	{
		if($_SESSION['user_role'] === 'Admin')
		{
			echo"<input type='submit' name='btnCreateNewComponent' value='Neue Komponente anlegen' />";
		}
	}
	
	?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>
