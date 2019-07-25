<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/supplierDetailsController.php");
?>

<?php 

echo "<section>
    <div class='container'>

        <div class='row'>
        <h2>Lieferanten - Details</h2><br><br><br>
        </div>

        <div class='row'>    
            <form>
                <div class='row' >
      
                <div class='col'>
                    <label>Firma</label><br>
                    <label>Straße</label><br>
                    <label>PLZ</label><br>
                    <label>Stadt</label><br>
                    <label>Telefon</label><br>
                    <label>Mobil</label><br>
                    <label>Fax</label><br>
                    <label>Mail</label>
                </div>";

        if($id == "empty"){
            echo "  <div class='col'>
                    <input type='text' name='firma' value=''><br>
                    <input type='text' name='strasse' value=''><br>
                    <input type='text' name='plz' value=''><br>
                    <input type='text' name='stadt' value=''><br>
                    <input type='text' name='telefon' value=''><br>
                    <input type='text' name='mobil' value=''><br>
                    <input type='text' name='fax' value=''><br>
                    <input type='text' name='mail' value=''>    
                </div>";
        }
        else{
            echo "  <div class='col'>
                    <input type='text' name='firma' value='".$supplier["supl_name"]."'><br>
                    <input type='text' name='strasse' value='".$supplier["supl_street"]."'><br>
                    <input type='text' name='plz' value='".$supplier["supl_city_code"]."'><br>
                    <input type='text' name='stadt' value='".$supplier["city_name"]."'><br>
                    <input type='text' name='telefon' value='".$supplier["supl_phone"]."'><br>
                    <input type='text' name='mobil' value='".$supplier["supl_mobile"]."'><br>
                    <input type='text' name='fax' value='".$supplier["supl_fax"]."'><br>
                    <input type='text' name='mail' value='".$supplier ["supl_mail"]."'>    
                </div>";
        }
        

        echo "</div>
            <br><br>
            <div class='row' >
                
                <br><br>
                <div class='row'>
                    <div class='col' >
                        <button type='button' class='btn btn-dark'>Speichern</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>";

?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>