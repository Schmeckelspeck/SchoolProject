<?php
	require_once("../../Datalayer/Component/ComponentsDatenAbruf.php");
?>

<?php
	// filterArt, filterText
	$allComponents = GetComponents("","");
	// This variable contains all components filtering options.
	$allComponentsFilterOptions = GetFilterOptions();
	var_dump($allComponents);
	var_dump($allComponentsFilterOptions);
?>