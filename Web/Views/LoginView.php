<?php 
	require_once("../Controllers/LoginController.php");
	require_once("../header.php");


$pdo = new PDO('mysql:host=127.0.0.1;dbname=testDatabase', 'root', '');

if(isset($_GET['login'])) {
    $username = $_POST['txtUsername'];
    $passwort = $_POST['txtPasswort'];
    
    $statement = $pdo->prepare("SELECT * FROM user WHERE user_name = :username");
    $result = $statement->execute(array('username' => $username));
	$user = $statement->fetch();
	
    //Überprüfung des Passworts
    //if ($user !== false && password_verify($passwort, $user['passwort'])) {
    //    $_SESSION['userid'] = $user['id'];
    //    die('Login erfolgreich. Weiter zu <a href="geheim.php">internen Bereich</a>');
    //} else {
    //    $errorMessage = "E-Mail oder Passwort war ungültig<br>";
    //}
    
}
?>

<?php 
if(isset($errorMessage)) {
    echo $errorMessage;
}
?>

<form action="?login=1" method="POST">
	Benutzername<br><input type="text" size="40" maxlength="250" name="txtUsername"><br><br>

	Passwort<br><input type="password" size="40"  maxlength="250" name="txtPassword"><br>
	<input type="submit" name="btnLogin" value="Abschicken">
</form> 