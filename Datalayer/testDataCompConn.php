<?php
    require_once("DatabaseConnection/DatabaseConnection.php");
?>

<?php
	function GetSpecificData()
	{
		$sqlStatement = "SELECT SQLSTATEMENT FROM DATABASE";
		return "<br>Das hier kommt aus BEZEICHNUNGDatenAbruf.php, und greift auf DatenbankZugriff.php".BeispielAusDbZugriffReader($sqlStatement);
    }
    
    function getComponent()
    {
        $comp1=array('comp_Id'=>'1',
                    'comp_Designation'=>'Grafikkarte',
                    'comp_Room_Id'=>'1','comp_Supplier_Id'=>'1',
                    'comp_PurchaseDate'=>'28.09.1869',
                    'comp_WarrantyLengthInY'=>'2',
                    'comp_Notes'=>'Nichts',
                    'comp_Manufacturer'=>'HasiAG',
                    'comp_Type'=>'1');
        return $comp1;
    }

    function insertComponent($comp)
    {
        /* $sqlInsert="INSERT INTO  componenten (comp_id,comp_description,comp_note,comp_manufacturer,comp_warranty_end,comp_created,comp_supl_id,comp_room_id)
                                      Values ('1','NVIDIA Geforce GTX 2500i','-','NVIDIA','22.07.2021','22.07.2018','1','1') ";*/
    }
?>