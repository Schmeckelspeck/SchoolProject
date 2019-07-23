<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	// require_once("../Controllers/BEZEICHNUNGController.php");
?>
<section>
	<div class="container-fluid">
		<div class="row">
            <div class="col-2">
                <?php require_once("../menu.php"); ?>
            </div>
           
            <div class="col-9">

		        <?php require_once("ComponentsView.php"); ?>
            </div>

        </div>
        
    <br>
    
	</div>
</section>


