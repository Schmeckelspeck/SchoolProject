<?php
    // Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/UsersController.php");
?>

<?php 
	echo 
	"
	<div class='input-group-prepend'>
	<form method='post'>	
		<div class='row'>
			<div class=''>
				
				<select class='form-control'>";

					foreach($allComponentsFilterOptions as $attribute)
					{
						echo "<option value='".key($attribute)."'> $attribute</option>";
					}
				echo "</select>
			</div>
			<div class=''>
				<input type='text' class='form-control' style='width: 15rem;' aria-label='Text input with dropdown button'>
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
	if(sizeof($allUsers > 0) && $allUsers != NULL)
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

		foreach($allUsers as $user)
		{
			echo "<tr>";
			echo "<th scope='row'>".$user['user_id']."</th>";
			echo "<td><a href='Layout.php?view=1&idComponent=".$user['user_id']."'>".$user['user_name']."</a></td>";
			echo "<td>".$user['user_usro_name']."</td>";
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