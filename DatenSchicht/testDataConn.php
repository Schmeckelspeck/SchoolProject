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
        $comp1=array(
            'comp_Id'=>'1',
            'comp_Designation'=>'Grafikkarte',
            'comp_Room_Id'=>'1',
            'comp_Supplier_Id'=>'1',
            'comp_PurchaseDate'=>'28.09.1869',
            'comp_WarrantyLengthInY'=>'2',
            'comp_Notes'=>'Nichts',
            'comp_Manufacturer'=>'HasiAG',
            'comp_Type'=>'1');
        return $comp1;
    }
?>