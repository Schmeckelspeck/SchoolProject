<?php
    require_once("../../Datalayer/Supplier/SupplierDetailsDatenAbruf.php");

    // Insert your id-$_GET-variable here.
    $supplier = GetSpecificSupplier($_GET['idSupplier']);
    $allCityOptions = GetCityOptions();
    $allCountryOptions = GetCountryOptions();
    

    // Zur Ansicht der Daten.
    var_dump($supplier);
    var_dump($allCityOptions);
    var_dump($allCountryOptions);
?>