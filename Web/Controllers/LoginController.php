<?php
    session_start();
    require_once("../../Datalayer/Login/LoginDatenAbruf.php");

    if(isset($_POST['btnLogin']))
    {
        if(isset($_POST['txtUsername']) && isset($_POST['txtUsername']) && $_POST['txtUsername'] !== "" && $_POST['txtUsername'] !== "")
        {
            if(CheckPasswordInput($_POST['txtUsername'], $_POST['txtPassword']) === 1)
            {
                $_SESSION['user_role'] = GetUserRole(GetUserId($_POST['txtUsername']));
            }
            else
            {
                unset($_SESSION['user_role']);
            }
        }
        else
        {
            unset($_SESSION['user_role']);
        }
    }
    echo $_SESSION['user_role'];
?>