<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

    function GetSpecificUser($id)
    {
        $sqlStatement =
        "SELECT
            user_name,
            usro_name
        FROM user
        INNER JOIN user_role ON user_role.usro_id = user.user_usro_id
        WHERE user_id = '".DefuseInputs($id)."';";

        $dataRows = ExecuteReaderAssoc($sqlStatement);
    
        return $dataRows;
    }
?>