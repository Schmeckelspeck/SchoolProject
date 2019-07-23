<?php
	require_once("../../Datalayer/ComponentDatenAbruf.php");
?>

<?php
if(isset($_GET['idComponent']))
{
	$componentData = GetSpecificComponent($id);
}
else
{
	header('Location: /Web/Views/ComponentsView.php');
}

?>