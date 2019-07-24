<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/BEZEICHNUNGController.php");
	require_once("../Controllers/ComponentsController.php");

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
                </div>


                <div class='col'>
                    <input type='text' name='firma'><br>
                    <input type='text' name='strasse'><br>
                    <input type='text' name='plz'><br>
                    <input type='text' name='stadt'><br>
                    <input type='text' name='telefon'><br>
                    <input type='text' name='mobil'><br>
                    <input type='text' name='fax'><br>
                    <input type='text' name='mail'>    
                </div>

            </div>
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