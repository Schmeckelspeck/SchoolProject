<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

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
?>