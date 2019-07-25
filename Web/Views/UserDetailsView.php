<?php
    // Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/UserDetailsController.php");
?>

<form method="POST">
	Benutzername <input type="text" name="txtUsername" value="<?php echo $userName; ?>" <?php if(isset($_GET['idUser'])){echo "disabled";} ?>/><br>
	<div <?php if(isset($_GET['idUser'])){echo "hidden";} ?>>Passwort <input type="password" name="txtPassword" value="<?php echo $userPassword; ?>" /></div><br>
	<?php 
		echo "Rolle <div class='input-group-append style='float: right;'>
			<select name='ddRole'>";
			
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
	<input type="submit" name="btnSubmitUserData" value="Speichern"/>
</form>
<!--Hier die Daten aus $specificUser zur Bearbeitung hin.-->