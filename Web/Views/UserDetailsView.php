<?php
    // Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/UserDetailsController.php");
?>

<form method="POST">

<div class="container">

	Benutzername <input class="form-control" type="text" name="txtUsername" value="<?php echo $userName; ?>" <?php if(isset($_GET['idUser'])){echo "disabled";} ?>/><br>
	<div <?php if(isset($_GET['idUser'])){echo "hidden";} ?>>Passwort <input class="form-control" type="password" name="txtPassword" value="<?php echo $userPassword; ?>" /></div><br>
	<div class="row">
	<?php 
		echo "<div class='input-group-append' style='float: right;'>
			<select class='form-control' name='ddRole'>";
			
			foreach($allRoleOptions as $role)
			{
				
				echo "<option value=".$role['usro_id'];
				if($role['usro_id'] === $userRole)
				{
					echo " selected='selected'";
				}
				echo ">".$role['usro_name']."</option>";
			}
			echo "</select>
		  </div>";
	?>
	
		<div class="col-mb-6">
			<input class="form-control" type="submit" name="btnSubmitUserData" value="Speichern"/>
		</div>
		<div class="col">
			<a class="form-control" href="http://localhost/Web/Views/Layout.php?view=6">Neuen Benutzer anlegen</a>
		</div>
		</div>
	</div>
</form>
<!--Hier die Daten aus $specificUser zur Bearbeitung hin.-->