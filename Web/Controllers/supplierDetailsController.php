<?php
    require_once("../../Datalayer/SupplierDetailsDatenAbruf.php");

    // Das hier muss von der Lieferanten-Übersichtsseite übergeben werden.
    $supplier = GetSpecificSupplier($_GET['idSupplier']);
    // Zur Ansicht der Daten.
    var_dump($supplier);
?>