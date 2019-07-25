<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

    // This function delivers a specific supplier entry.
    function GetSpecificSupplier($id)
    {
        $sqlStatement = 
        "SELECT supl_city_code,
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
        LEFT JOIN country ON city.city_cont_id = country.cont_id
        WHERE supl_id = ".DefuseInputs($id);
        $sqlStatement = $sqlStatement.";";

        $dataRows = ExecuteReaderAssoc($sqlStatement);

        return $dataRows;
    }
?>