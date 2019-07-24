<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

    function GetSupplierFilterOptions()
    {
        return array(
            'supl_city_code'=>'Postleitzahl',
            'supl_fax'=>'Fax',
            'supl_mail'=>'Mail',
            'supl_mobile'=>'Mobil',
            'supl_name'=>'Bezeichnung',
            'supl_phone'=>'Festnetz',
            'supl_street'=>'Straße',
            'cont_name'=>'Land'
        );
    }

    function GetSuppliers()
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
        mysqli_select_db($connection, $GLOBALS['testDb']);

        $sqlStatement = 
        "SELECT 
            supl_city_code,
            supl_fax,
            supl_id,
            supl_mail,
            supl_mobile,
            supl_name,
            supl_phone,
            supl_street,
            cont_name
        FROM supplier
        LEFT JOIN city ON city.city_id = supplier.supl_city_id
        LEFT JOIN country ON city.city_cont_id = country.cont_id";
        
        
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