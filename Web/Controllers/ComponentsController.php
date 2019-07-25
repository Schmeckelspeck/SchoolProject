<?php
	require_once("../../Datalayer/ComponentsDatenAbruf.php");
?>

<?php
	// filterArt, filterText
	$allComponentsFilterOptions = GetFilterOptions();
	$allFilterOptionsKeys = array_keys($allComponentsFilterOptions);
	

	if(isset($_POST["filterField"])){
		$allComponents = GetComponents($_POST["selectField"], $_POST["filterField"]);
		//var_dump($_POST["filterField"]);
		//var_dump(key($_POST["selectField"]));

	} else {
		$allComponents = GetComponents("","");
	}
	// This variable contains all components filtering options.
	$allComponentsFilterOptions = GetFilterOptions();
	// var_dump($allComponents);
	// var_dump($allComponentsFilterOptions);
?>