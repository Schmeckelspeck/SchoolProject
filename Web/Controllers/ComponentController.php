<?php
	require_once("../../Datalayer/ComponentDatenAbruf.php");
?>

<?php
	if(isset($_GET['idComponent']))
	{
		$componentData = GetSpecificComponent($id);
		$componentAttributes = GetComponentAttributes($componentData['comp_id']);
	}

?>