<?php
    require_once("../../Datalayer/UserDetailsDatenAbruf.php");

    $specificUser = GetSpecificUser($_GET['idUser']);
    $allRoleOptions = GetRoleOptions();
    var_dump($specificUser);
    var_dump($allRoleOptions);
?>