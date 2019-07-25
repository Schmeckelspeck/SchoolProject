<?php
    require_once("../../Datalayer/SuppliersDatenAbruf.php");

    // filterArt, filterText
    $allSuppliers = GetSuppliers("","");
    // This variable contains the supplier filtering options.
    $allFilterOptions = GetSupplierFilterOptions();
    var_dump($allSuppliers);
    // var_dump($allFilterOptions);
?>