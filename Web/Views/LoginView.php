<?php 
	require_once("../Controllers/LoginController.php");
	require_once("../header.php");
?>

<form action="Layout.php" method="POST">
	<div class="login-controls-box">
		Benutzername<br><input type="text" size="40" maxlength="250" name="txtUsername"><br><br>
		Passwort<br><input type="password" size="40"  maxlength="250" name="txtPassword"><br>
		<input type="submit" name="btnLogin"  value="Abschicken">
	</div>
</form> 