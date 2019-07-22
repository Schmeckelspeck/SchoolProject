<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/testCompController.php");
?>

<?php echo $demoComp['comp_Id']." ";

    echo  $demoComp['comp_Designation']?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>