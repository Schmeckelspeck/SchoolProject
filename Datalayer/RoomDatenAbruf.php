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

function GetRooms($filterText, $filterArt) // $filterText, $filterArt
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

    $dataRows = array();

    $result = mysqli_query($connection, $sqlStatement);
    
    if($result)
    {
        while($data = mysqli_fetch_assoc($result))
        {
            array_push($dataRows, $data);
        }
        mysqli_close($connection);
    }
    else
    {
        $dataRows = array();
    }
    
    return $dataRows;
}
?>