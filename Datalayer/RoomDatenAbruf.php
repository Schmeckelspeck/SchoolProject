<?php
    require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php

function GetRoomsFilterOptions()
{
    return array(
        'room_desc'=>'Bezeichnung',
        'room_number'=>'Raumnummer',
        'room_note'=>'Beschreibung'
    );
}

// This function returns all rooms and takes the two parameters filterText and filterArt.
function GetRooms($filterArt, $filterText) // $filterText, $filterArt
{
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

    $dataRows = ExecuteReaderAssoc($sqlStatement);
    
    return $dataRows;
}
?>