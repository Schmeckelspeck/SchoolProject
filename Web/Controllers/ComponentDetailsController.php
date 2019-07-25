<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
	
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent'])[0];
		//var_dump($componentData);

		$allComponentOfSpecType= GetAllComponentsOfSpecificType($componentData['coty_name']);
		
		// This array contains all attributes linked to this component.
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		$allComponentAttributesOptions = GetAllComponentAttributes();
		var_dump($componentAttributes);
		// var_dump($allComponentAttributesOptions);
	}
?>