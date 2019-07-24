<?php
    require_once("../../Datalayer/UserDetailsDatenAbruf.php");

    $specificUser = GetSpecificUser($_GET['idUser']);
    var_dump($specificUser);
?>