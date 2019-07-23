<?php
    require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function GetSpecificData()
	{
		$sqlStatement = "SELECT SQLSTATEMENT FROM DATABASE";
		return "<br>Das hier kommt aus BEZEICHNUNGDatenAbruf.php, und greift auf DatenbankZugriff.php".BeispielAusDbZugriffReader($sqlStatement);
    }
    
    function selectComponent()
    {
        $sqlSelectComp="Select * from component";
        $array=ExecuteReader($sqlSelectComp,'testDatabase');
        return $array;
                            
    }

    function selectComponentAssoc()
    {
        $sqlSelectComp="Select * from component";
        $array=ExecuteReaderAssoc($sqlSelectComp,'testDatabase');
        return $array;
    }
    
?>