<?php
	//require_once("../../Datalayer/ComponentDatenAbruf.php");
?>

<?php
$componentData = 0;
if(isset($_GET['idComponent']))
{
	//$componentData = GetComponent($id);
}
else
{
	header('Location: /Web/Views/ComponentsView.php');
}
	
?>