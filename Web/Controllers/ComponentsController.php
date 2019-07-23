<?php
	require_once("../../Datalayer/ComponentsDatenAbruf.php");
?>

<?php
	// filterText, filterArt, hier die Filtersuche reingeben
	$allComponents = GetComponents("","");
	$allComponentsFilterOptions = GetFilterOptions();
?>