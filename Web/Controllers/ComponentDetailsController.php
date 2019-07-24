<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent']);
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		$allComponentAttributesOptions = GetAllCom
		ponentAttributes();
		// var_dump($componentData)
		// var_dump($componentAttributes)
		// var_dump($allComponentAttributesOptions)
	}
?>