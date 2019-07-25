<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

    function GetAllUsers()
    {
        $sqlStatement = 
        "SELECT
            user_name,
            usro_name
        FROM user
        LEFT JOIN user_role ON user_role.usro_id = user.user_usro_id;";

        $dataRows = ExecuteReaderAssoc($sqlStatement);
    
        return $dataRows;
    }
?>