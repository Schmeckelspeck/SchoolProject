<?php
    require_once("../DatabaseConnection/DatabaseConnection.php");
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
// How does the filtering process work?
    // The dropdown on the surface sends the string name of the database column the user has selected.
    // Also, the ViewController provides a search string, which is combined with the column name at the end of the sql statement.
    // If the user did not provide any filtering information, the complete data set is returned.
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