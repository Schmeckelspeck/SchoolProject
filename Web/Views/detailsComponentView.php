<?php 


	 
	//	PLEASE DO NOT DELETE MAYBE NEEDED TO TEST THANKS
	/* require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/testCompController.php");
		echo "<br/>";
		echo "<br/>"; 
	
	insertCity('London',insertCountry('England'));  */
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
						<input type="text" value="<?php echo($componentData['coty_name']) ?>">
						<input type="text"  value="<?php echo($componentData['comp_manufacturer']) ?>" >
					</div>

					<div class="col">
						<label>Lieferant :</label><br>
						<label>Raum :</label><br>
						<label>Gewähreistungsdauer :</label><br>
					</div>
					
					<div class="col">
						<input type="text" name="lastname">
						<input type="text" name="lastname">
						<input type="text" name="lastname">
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
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
							</tr>
						</thead>
						<tbody>
							<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
							</tr>
							<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
							</tr>
							<tr>
							<th scope="row">3</th>
							<td>Larry</td>
							<td>the Bird</td>
							<td>@twitter</td>
							</tr>
						</tbody>
						</table>
					</div>
					<div class="col-6">
						<textarea style="width:100%"></textarea>
					</div>

					<br><br>
					<div class="row">
						<div class="col" >
							<button type="button" class="btn btn-dark">Speichern</button>
						</div>
						<div class="col">
							<button type="button" class="btn btn-dark">Ausmustern</button>
						</div>
						<div class="col">
							<button type="button" class="btn btn-dark">Löschen</button>
						</div>
					</div>
				</div>
			</form>
		</div>
</section>