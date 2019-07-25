<?php
    require_once("DatabaseConnection/DatabaseConnection.php");
    require_once("Utils/HashGenerator.php");

    function GetRoleOptions()
    {
        $sqlStatement = 
        "SELECT
            usro_id,
            usro_name
        FROM user_role;";

        $dataRows = ExecuteReaderAssoc($sqlStatement);
    
        return $dataRows;
    }

    function GetSpecificUser($id)
    {
        $sqlStatement =
        "SELECT
            user_id,
            user_name,
            usro_id,
            usro_name
        FROM user
        INNER JOIN user_role ON user_role.usro_id = user.user_usro_id
        WHERE user_id = '".DefuseInputs($id)."';";

        $dataRows = ExecuteReaderAssoc($sqlStatement);
    
        return $dataRows;
    }

    function InsertNewUser($userName, $userPassword, $userRoleId)
    {
        echo $userName.$userPassword.$userRoleId;
        $sqlStatement = 
        "INSERT INTO user
        (
            user_name, 
            user_password,
            user_usro_id
        )
        VALUES
        (
            '".DefuseInputs($userName)."',
            '".GetSha256($userPassword)."',
            ".$userRoleId."
        );";

        echo $sqlStatement;
        ExecuteWriter($sqlStatement);
    }

    function UpdateUserData($userId, $userRoleId)
    {
        $sqlStatement = 
        "UPDATE user
        SET
            user_usro_id = '".$userRoleId."'
        WHERE user_id = ".$userId.";";
        ExecuteWriter($sqlStatement);
    }
?>