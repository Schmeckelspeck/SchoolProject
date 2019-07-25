<?php
    require_once("../../Datalayer/UserDetailsDatenAbruf.php");

    $specificUser = GetSpecificUser($_GET['idUser']);

    if(sizeof($specificUser) > 0)
    {
        $userName = $specificUser[0]['user_name'];
        $userPassword = $specificUser[0]['user_password'];
        $userRole = $specificUser[0]['usro_id'];
    }
    else
    {
        $userName = null;
        $userPassword = null;
        $userRole = null;
    }

    $allRoleOptions = GetRoleOptions();
    var_dump($specificUser);



    if(isset($_POST['btnSubmitUserData']))
    {
        echo "button";
        if(isset($_POST['txtUsername']) && $_POST['txtUsername'] !== "" && isset($_POST['txtPassword']) && $_POST['txtPassword'] !== "")
        {
            echo "inputOk";
            if(!isset($_GET['idUser']))
            {
                InsertNewUser
                (
                    $_POST['txtUsername'],
                    $_POST['txtPassword'],
                    $_POST['ddRole']
                );
            }
            else if(isset($_GET['idUser']))
            {
                UpdateUserData
                (
                    $_POST['txtUsername'],
                    $_POST['txtPassword'],
                    $_POST['ddRole']
                );
            }   
        }
        else
        {
            echo "DEBUG: Username oder Passwort darf nicht leer sein.";
        }
        
            
    }
?>