<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent']);
		// This array contains all attributes related to this component.
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		var_dump($componentData);
		$allComponentAttributesOptions = GetAllComponentAttributes();
	}
?>