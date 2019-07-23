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
        $sqlInsertComp="Insert into `component` (`comp_id` okpowekrp, `comp_description`, `comp_note`, `comp_manufacturer`, `comp_warranty_length`, `comp_purchase_date`, `comp_supl_id`, `comp_room_id`, `comp_coty_id`)
                                        VALUES (NULL, 'ACER Laptop', 'krasser PC NR 2', 'HasiAG', '2', '2019-07-31 00:00:00', NULL, NULL, NULL)";
        $array=ExecuteWriter($sqlInsertComp);
    
        return $array;
    }

    function insertSupplier()
    {
        $sqlInsertCont='INSERT INTO country(
                        cont_name
                        )
                        VALUES
                        (?)';
            
        $sqlInsertCity='INSERT INTO city	(
                        city_name,
                        city_cont_id
                        )
                        VALUES
                        (?,?)';
                        
        $sqlInsertSupl='INSERT INTO supplier(
                        supl_name,
                        supl_mail,
                        supl_phone,
                        supl_note,
                        supl_street,
                        supl_city_code,
                        supl_mobile,
                        supl_fax,
                        supl_state,
                        supl_city_id
                        )
                        VALUES
                        (?,?,?,?,?,?,?,?,?,?)';
    }
    
?>