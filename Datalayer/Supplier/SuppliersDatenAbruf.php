<?php
    require_once("../DatabaseConnection/DatabaseConnection.php");

    // This function returns the options for the filter dropdown.
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

    // This function returns all suppliers in the database, based on filtering configuration the user set.
    // How does the filtering process work?
    // The dropdown on the surface sends the string name of the database column the user has selected.
    // Also, the ViewController provides a search string, which is combined with the column name at the end of the sql statement.
    // If the user did not provide any filtering information, the complete data set is returned.
    function GetSuppliers($filterArt, $filterText)
    {
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
        

    $dataRows = ExecuteReaderAssoc($sqlStatement);
    
    return $dataRows;
    }
?>