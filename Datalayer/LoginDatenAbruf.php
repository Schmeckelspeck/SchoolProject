<?php
    require_once("DatabaseConnection/DatabaseConnection.php");
    require_once("Utils/HashGenerator.php");

    // This function delivers username and password.
    // Keep in mind that passwords need to be saved as hash values in the database.
    function GetUserData($usernameInput)
    {
        $sqlStatement = 
        "SELECT
            user_name,
            user_password
        FROM user
        WHERE
            user_name = '".DefuseInputs($usernameInput)."';";
        
        $dataRows = ExecuteReaderAssoc($sqlStatement);
            
        return $dataRows;
    }

    function CheckPasswordInput($usernameInput, $passwordInput)
    {
        $userData = GetUserData($usernameInput);
        if(sizeof($userData) > 0)
        {
            if($userData[0]['user_password'] === GetSha256($passwordInput))
            {
                $isCorrect = 1;
            }
            else
            {
                $isCorrect = 0;
            }
        }
        else
        {
            $isCorrect  = 0;
        }
        return $isCorrect;
    }

    function GetUserId($userName)
    {
        $sqlStatement = 
        "SELECT user_id 
        FROM user 
        WHERE 
            user_name = '".DefuseInputs($userName)."';";

        $userId = ExecuteReaderAssoc($sqlStatement);
        if(sizeof($userId) > 0)
        {
            $result = $userId[0]['user_id'];
        }
        else
        {
            $result = null;
        }

        return $result;
    }

    function GetUserRole($id)
    {
        $sqlStatement = 
        "SELECT usro_name
        FROM user_role
        INNER JOIN user ON user.user_usro_id = user_role.usro_id
        WHERE user.user_id = '".DefuseInputs($id)."';";

        $userRole = ExecuteReaderAssoc($sqlStatement);
        $result = $userRole[0]['usro_name'];

        return $result;
    }
?>