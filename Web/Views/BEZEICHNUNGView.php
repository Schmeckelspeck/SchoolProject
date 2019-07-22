<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/BEZEICHNUNGController.php");
?>
<section>
	<div class="container">
		<div class="row">
		<h1>Das hier ist ein Beispiel einer View. Hei�t derzeit BEZEICHNUNGView.php</h1>
Hier erscheint der R�ckgabewert des Controllers: <?php echo BeispielFunktion(); ?>
		</div>
	</div>
</section>


<br>
<?php echo "<br>Hier folgt die Variable \$data aus dem Controller:".$data; ?>

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>