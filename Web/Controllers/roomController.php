<?php
    require_once("../../Datalayer/roomDatenAbruf.php");

    // filterArt, filterText
    $allRooms = GetRooms("","");
    var_dump($allRooms);
?>