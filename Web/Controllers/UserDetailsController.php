<?php
    require_once("../../Datalayer/User/UserDetailsDatenAbruf.php");

    $specificUser = GetSpecificUser($_GET['idUser']);

    if(sizeof($specificUser) > 0)
    {
        $userName = $specificUser[0]['user_name'];
        $userPassword = $specificUser[0]['user_password'];
        echo $userPassword;
        $userRole = $specificUser[0]['usro_id'];
    }
    else
    {
        $userName = null;
        $userPassword = null;
        $userRole = null;
    }

    $allRoleOptions = GetRoleOptions();

    if(isset($_POST['btnSubmitUserData']))
    {
        if(isset($_GET['idUser']))
        {
            if(isset($_POST['txtUsername']) && $_POST['txtUsername'] !== "" && isset($_POST['txtPassword']) && $_POST['txtPassword'] !== "")
            {
                // Input
            }
            else
            {
                // InputWrong
            }
        }
        else
        {
            // Update
        }
    }

    //InsertNewUser
    //(
    //    $_POST['txtUsername'],
    //    $_POST['txtPassword'],
    //    $_POST['ddRole']
    //);

    //UpdateUserData
    //(
    //    $_GET['UserId'],
    //    $_POST['ddRole']
    //);
?>