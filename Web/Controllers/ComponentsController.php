<?php
	require_once("../../Datalayer/ComponentsDatenAbruf.php");
?>

<?php
	// filterText, filterArt
	$allComponents = GetComponents("","");
	$allComponentsFilterOptions = GetFilterOptions();
?>