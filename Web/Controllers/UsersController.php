<?php
    require_once("../../Datalayer/UsersDatenAbruf.php");

    $allUsers = GetAllUsers();
    var_dump($allUsers);
?>