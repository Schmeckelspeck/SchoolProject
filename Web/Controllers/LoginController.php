<?php
	require_once("../../Datalayer/LoginDatenAbruf.php");
?>

<?php
	if(isset($_POST['btnCredentialsSubmit']))
	{
		var_dump($_POST);
		if(isset($_POST['txtUsername']))
		{
			if(CredentialsAreValid($_POST['txtUsername'], hash('sha256',$_POST['txtPassword']))) // Password SHA...
			{
				$_SESSION['role'] = GetRoleOfUser($_POST['txtUsername']);
			}
		}
	}
?>