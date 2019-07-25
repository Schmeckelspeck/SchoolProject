<?php
    require_once("../../Datalayer/User/UsersDatenAbruf.php");

    $allUsers = GetAllUsers();
    var_dump($allUsers);
?>