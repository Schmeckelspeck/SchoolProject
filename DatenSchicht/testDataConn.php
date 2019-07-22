<?php
	require_once("Allgemeines/DatenbankZugriff.php");
?>

<?php
	function GetSpecificData()
	{
		$sqlStatement = "SELECT SQLSTATEMENT FROM DATABASE";
		return "<br>Das hier kommt aus BEZEICHNUNGDatenAbruf.php, und greift auf DatenbankZugriff.php".BeispielAusDbZugriffReader($sqlStatement);
    }
    
    function getComponent()
    {
        $comp1=array('component_Id'=>'1','component_Designation'=>'Grafikkarte','component_Room_Id'=>'1','component_Supplier_Id'=>'1','component_PurchaseDate'=>'28.09.1869','component_WarrantyLengthInY'=>'2','component_Notes'=>'Nichts','component_Manufacturer'=>'HasiAG','component_Type'=>'1');
        return $comp1;
    }
?>