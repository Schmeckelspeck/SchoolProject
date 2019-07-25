<?php
    require_once("../../Datalayer/SupplierDetailsDatenAbruf.php");

    // Insert your id-$_GET-variable here.
    $id = $_GET['idSupplier'];
   
    $supplier = GetSpecificSupplier($_GET['idSupplier'])[0];
    $allCityOptions = GetCityOptions();
    $allCountryOptions = GetCountryOptions();
    

    // Zur Ansicht der Daten.
    // var_dump($supplier);
    // var_dump($allCityOptions);
    // var_dump($allCountryOptions);
?>