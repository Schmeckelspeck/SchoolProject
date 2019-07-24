<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent']);
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		var_dump($componentData);
		$allComponentAttributesOptions = GetAllComponentAttributes();
	}
?>