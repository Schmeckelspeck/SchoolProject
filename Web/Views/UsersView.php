<?php
    // Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/UsersController.php");
?>

<?php 

	echo "<div class='row'>";
	if(sizeof($allUsers > 0) && $allUsers != NULL)
	{
		echo "<table class='table'>
		<thead>
			<tr>
			<th scope='col'>#</th>
			<th scope='col'>Benutzername</th>
			<th scope='col'>Rolle</th>
			</tr>
		</thead>";
		echo "<tbody>";

		foreach($allUsers as $user)
		{
			echo "<tr>";
			echo "<th scope='row'>".$user['user_id']."</th>";
			echo "<td><a href='Layout.php?view=6&idUser=".$user['user_id']."'>".$user['user_name']."</a></td>";
			echo "<td>".$user['usro_name']."</td>";
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

?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>