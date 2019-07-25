<?php 


	 
	//	PLEASE DO NOT DELETE MAYBE NEEDED TO TEST THANKS
	/* require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/testCompController.php");
		echo "<br/>";
		echo "<br/>"; 
	
	insertCity('London',insertCountry('England'));  */
	require_once("../Controllers/ComponentDetailsController.php");
	
?>
<section>
	<div class="container">
	
	<div class="row">
		<h2>Komponenten - Details</h2><br><br><br>
	</div>
	
		<div class="row">    
			<form>
				<div class="row" >

				
					<div class="col">
						<label>Bezeichnung :</label><br>
						<label>Komponenten :</label><br>
						<label>Hersteller :</label><br>	
					</div>

					<div class="col">
						<input type="text" value="<?php echo($componentData['comp_description']) ?>">
						<input type="text" value="<?php echo($componentData["comp_note"]) ?>">
						<input type="text"  value="<?php echo($componentData['comp_manufacturer']) ?>" >
					</div>

					<div class="col">
						<label>Lieferant :</label><br>
						<label>Raum :</label><br>
						<label>Gewähreistungsdauer in Monaten :</label><br>
					</div>
					
					<div class="col">
						<input type="text"  value="<?php echo($componentData["supl_name"]) ?>" >
						<input type="text"  value="<?php echo($componentData["room_number"]) ?>" >
						<input type="text"  value="<?php echo($componentData["comp_warranty_length"]) ?>" >
					</div>
				</div>
				<br><br>
				<div class="row">
					<div class="col-6">
						<label>Attribute<label>
					</div>
					<div class="col-6">
						<label>Notiz<label>
					</div>

				</div>
				<div class="row" >
					
					<div class="col-6">
						<table class="table">
						<thead>
							<tr>
								<th scope="col">Attribute</th>
								<th scope="col">Wert</th>
							</tr>
						</thead>
						
						<tbody>
						<?php
							// var_dump($allComponents);
							$attributeOne = "fisch";
							$attributeTwo = "blubb";
							echo "<tr>";
								echo "<td>";
								// echo key($attribute);
								echo "Höhe";
								echo "</td>";
								echo "<td>";
								// echo $attribute;
								echo "1,94m";
								echo "</td>";
								echo "</tr>";
						?>
						</tbody>
					
						</table>
					</div>
					<div class="col-6">
						<textarea style="width:100%"></textarea>
					</div>

					<br><br>
					<div class="row mx-auto">
						<div class="col" >
							<button type="button" class="btn btn-dark">Speichern</button>
						</div>
						<div class="col">
							<button type="button" class="btn btn-dark">Ausmustern</button>
						</div>
						<div class="col">
							<button type="button" class="btn btn-dark">Löschen</button>
						</div>
						<div class="col">
							<select>
							
								<?php 
								var_dump($allComponentOfSpecType);
								foreach($allComponentOfSpecType as $Data)
								{
									
									echo"<option>";
									echo $Data['comp_description']." - ".$Data['comp_manufacturer'];
									
									echo"</option>";
									
									
								}
								?>
							</select>
						</div>
					</div>
				</div>
			</form>
		</div>
</section>