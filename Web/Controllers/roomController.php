<?php
    require_once("../../Datalayer/Room/roomDatenAbruf.php");

    // filterArt, filterText
    $allRooms = GetRooms("","");
    $allRoomFilterOptions = GetRoomsFilterOptions();
    var_dump($allRooms);
    var_dump($allRoomFilterOptions);
?>