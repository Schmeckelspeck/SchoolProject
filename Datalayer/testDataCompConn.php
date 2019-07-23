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
        $array=ExecuteReader($sqlSelectComp);
        return $array;
                            
    }

    function selectComponentAssoc()
    {
        $sqlSelectComp="Select * from component";
        $array=ExecuteReaderAssoc($sqlSelectComp);
        return $array;
    }

    function insertComponent()
    {
        $sqlInsertComp="Insert into `component` (`comp_id`, `comp_description`, `comp_note`, `comp_manufacturer`, `comp_warranty_length`, `comp_purchase_date`, `comp_supl_id`, `comp_room_id`, `comp_coty_id`)
                                        VALUES (NULL, 'ACER Standpc', 'krasser PC NR 2', 'HasiAG', '2', '2019-07-31 00:00:00', NULL, NULL, NULL)";
        $array=ExecuteWriter($sqlInsertComp);
        return $array;
    }
    
?>