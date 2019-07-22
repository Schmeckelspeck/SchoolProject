<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/testController.php");
?>

<<<<<<< HEAD:Web/Views/testView.php
<?php var_dump($demoComp); echo $demoComp['comp_Designation']; ?>
=======
<?php echo $demoComp['comp_Id']." ";
    echo  $demoComp['comp_Designation']?>
>>>>>>> 1feb1b6631a842e9d90ea2ede8130f2291c04c9d:Web/Views/testCompView.php

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>