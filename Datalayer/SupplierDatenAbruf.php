<?php
    function GetSuppliers()
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']); // nur für einen lokalen Test
        mysqli_select_db($connection, $GLOBALS['testDb']);

        $sqlStatement = 
        "SELECT 
            room_id,
            room_description, 
            room_note, 
            room_number
        FROM room";

        if($filterArt !== null && $filterArt !== "")
        {
            $sqlStatement = $sqlStatement." WHERE ".DefuseInputs($filterArt)." LIKE '%".DefuseInputs($filterText)."%'";
        }
        $sqlStatement = $sqlStatement.";";
    }
?>