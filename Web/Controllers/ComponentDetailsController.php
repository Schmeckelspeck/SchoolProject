<?php
	require_once("../../Datalayer/ComponentDetailsDatenAbruf.php");
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($_GET['idComponent']);
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
		$allComponentAttributesOptions = GetAllComponentAttributes();
<<<<<<< HEAD
		var_dump($componentData);
=======
		// var_dump($componentData)
		// var_dump($componentAttributes)
		// var_dump($allComponentAttributesOptions)
>>>>>>> 74b0faf9ccf7302def367d07fc20df70a8f9417b
	}
?>