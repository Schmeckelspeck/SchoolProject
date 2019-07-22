<?php
	require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function CredentialsAreValid($username, $passwordSHA256)
	{
		$sqlStatement = 
		"SELECT
			(CASE WHEN password = ".$passwordSHA256." THEN 1 ELSE 0 END) AS is_equal
		FROM users 
		WHERE
			username = ".$username;

		// $response = ExecuteReader($sqlStatement);
		$response = true;
		return $response;
	}

	function GetRoleOfUser($username)
	{
		$sqlStatement = 
		"SELECT description 
		FROM users 
		INNER JOIN roles ON roles.id = users.id_role
		WHERE
			username = ".$username;

		// $role = ExecuteReader($sqlStatement);
		$role = 'admin';
		return $role;
	}
?>