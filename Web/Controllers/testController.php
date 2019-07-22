<?php
	require_once("../../DatenSchicht/testDataConn.php");
?>

<?php
	function BeispielFunktion()
	{
		return "<br>Das hier kommt aus dem BEZEICHNUNGController.php.";
	}

	// Man kann hier Variablen benennen und auf diese dann in der jeweiligen View zugreifen.
	$demoComp = getComponent();
	
?>