<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/testCompController.php");
?>

<?php var_dump(selectComponent());
		echo "<br/>";
		echo "<br/>";
	  var_dump(selectComponentAssoc());
?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>