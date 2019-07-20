<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/BEZEICHNUNGController.php");
?>

<h1>Das hier ist ein Beispiel einer View. Heißt derzeit BEZEICHNUNGView.php</h1>
Hier erscheint der Rückgabewert des Controllers: <?php echo BeispielFunktion(); ?>
<br>
<?php echo "<br>Hier folgt die Variable \$data aus dem Controller:".$data; ?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>