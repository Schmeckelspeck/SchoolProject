<?php

    function GetFilterOptions()
    {
        return array(
            'supl_city_code'=>'Postleitzahl',
            'supl_fax'=>'Fax',
            'supl_mail'=>'Mail',
            'supl_mobile'=>'Mobile',
            'supl_name'=>'Bezeichnung',
            'supl_phone'=>'Telefon',
            'supl_street'=>'Straße'
        );
    }

    function GetSuppliers()
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']); // nur für einen lokalen Test
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
            supl_street
        FROM supplier";

        if($filterArt !== null && $filterArt !== "")
        {
            $sqlStatement = $sqlStatement." WHERE ".DefuseInputs($filterArt)." LIKE '%".DefuseInputs($filterText)."%'";
        }
        $sqlStatement = $sqlStatement.";";
    }
?>