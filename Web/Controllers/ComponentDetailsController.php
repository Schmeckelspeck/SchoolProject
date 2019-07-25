<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
	
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent'])[0];
		//var_dump($componentData["coty_name"]);
		

		$allComponentOfSpecType = getAllComponentsOfSpecificType($componentData['coty_name']);
		//var_dump($allComponentOfSpecType);
		
		// This array contains all attributes linked to this component.
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		$allComponentAttributesOptions = GetAllComponentAttributes();
	}
?>