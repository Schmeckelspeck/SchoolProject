<?php
    require_once("../../Datalayer/roomDatenAbruf.php");

    // statt String leer dann Inhalt der Filterbox.
    $allRooms = GetRooms("","");
    var_dump($allRooms);
?>