<?php
    require_once("DatabaseConnection/DatabaseConnection.php");

    function GetSpecificSupplier($id)
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
        mysqli_select_db($connection, $GLOBALS['testDb']);
        
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
        
        var_dump($dataRows);
        return $dataRows;
    }
?>