<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");
	echo($_SESSION['user_role']);
	// Das hier muss jeweils bei der View angepasst werden.
	// require_once("../Controllers/BEZEICHNUNGController.php");
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<section>
	<div class="container-fluid">
		<div class="row">
            <div class="col-2">
				<?php 
				require_once("../menu.php"); 
				?>
            </div>
           
            <div class="col-9">

				<?php 
				
				switch ($_GET["view"]) {
					case 0:
						require_once("ComponentsView.php"); 
						break;
					case 1:
						require_once("detailsComponentView.php"); 
						break;
					case 2:
						require_once("rooms.php");
						break;
					case 3:
						require_once("supplierView.php");
						break;
					case 4:
						require_once("ComponentDetailsView.php"); 
						break;
					default:
						require_once("ComponentsView.php");
						break; 

				}
				?>

            </div>

        </div>
        
    <br>
    
	</div>
</section>


