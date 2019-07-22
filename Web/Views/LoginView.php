<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/LoginController.php");
?>

<form method="POST">
	<div>
		Benutzername: <input type="text" name="txtUsername" /><br>
		Passwort: <input  type="text" name="txtPassword" />
		<input type="submit" name="btnCredentialsSubmit" value="Absenden"/>
	</div>
</form>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>