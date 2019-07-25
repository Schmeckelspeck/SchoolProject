<?php
    require_once("../DatabaseConnection/DatabaseConnection.php");
?>

<?php
    function insertCountry($cont_name)
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);
        $sqlInsertCont=$connection ->prepare('INSERT INTO country(
            cont_name
            )
            VALUES
            (?)');
        $sqlInsertCont ->bind_param("s",$countryName);
        $countryName=$cont_name;
        $sqlInsertCont->execute();
        $getLastContID=mysqli_insert_id($connection);
        mysqli_close($connection);
        return $getLastContID;
    }

    function insertCity($city_name,$lastContID)
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);

        $sqlInsertCity=$connection ->prepare('INSERT INTO city (
            city_name,
            city_cont_id
            )
            VALUES 
            (?,?)');
        $sqlInsertCity ->bind_param("si",$cityName,$lastContID);
        $cityName=$city_name;
        $sqlInsertCity->execute();
        $getLastCityID=mysqli_insert_id($connection);
        mysqli_close($connection);
        return $getLastCityID;
    }
        
    function insertSupl($supl_name,$supl_mail,$supl_phone,$supl_note,$supl_street,$supl_city_code,$supl_mobile,$supl_fax,$supl_State,$lastCityID)
    {
        $connection = mysqli_connect($GLOBALS['testIp'], $GLOBALS['username'], $GLOBALS['password']);
		mysqli_select_db($connection, $GLOBALS['testDb']);

        $sqlInsertSupl=$connection ->prepare('INSERT INTO supplier(
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
            (?,?,?,?,?,?,?,?,?,?)');
            $sqlInsertSupl ->bind_parm("c,c,c,c,c,c,c,c,c,i",$suplName,$suplMail,$suplPhone,$suplNote,$suplStreet,$suplCityCode,$suplMobile,$suplFax,$suplState,$getLastCityID);
            $suplName=$supl_name;
            $suplMail=$supl_mail;
            $suplPhone=$supl_phone;
            $suplStreet=$supl_street;
            $suplCityCode=$supl_city_code;
            $suplMobile=$supl_mobile;
            $suplFax=$supl_fax;
            $suplState=$supl_street;
            $getLastCityID=$lastCityID;
            $sqlInsertSupl->execute();
            $getLastSuplID=mysqli_insert_id($connection);
            mysqli_close($connection);
            return $getLastSuplID;
    }
            
            

    
?>