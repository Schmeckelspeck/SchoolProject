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
        $comp1=array('id'=>'1');
        return $comp1;
    }
?>