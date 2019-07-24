<?php
	require_once("../../Datalayer/ComponentsDatenAbruf.php");
?>

<?php
	// filterText, filterArt, hier die Filtersuche reingeben
	$allComponents = GetComponents("","");
	$allComponentsFilterOptions = GetFilterOptions();
	var_dump($allComponents);
	var_dump($allComponentsFilterOptions);
?>