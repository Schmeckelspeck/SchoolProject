<?php
    if(session_id() == '')
    {
        session_start();
    }
    require_once("../../Datalayer/LoginDatenAbruf.php");

    if(isset($_POST['btnLogin']))
    {
        if(isset($_POST['txtUsername']) && isset($_POST['txtUsername']) && $_POST['txtUsername'] !== "" && $_POST['txtUsername'] !== "")
        {
            if(CheckPasswordInput($_POST['txtUsername'], $_POST['txtPassword']) === 1)
            {
                $_SESSION['user_role'] = GetUserRole(GetUserId($_POST['txtUsername']));
            }
        }
        
    }
?>