<?php
    require_once("../../Datalayer/SupplierDetailsDatenAbruf.php");

    // Insert your id-$_GET-variable here.
    $supplier = GetSpecificSupplier($_GET['idSupplier']);
    // Zur Ansicht der Daten.
    var_dump($supplier);
?>