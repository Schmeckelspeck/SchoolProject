<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../header.php");

	// Das hier muss jeweils bei der View angepasst werden.
	require_once("../Controllers/ComponentController.php");
?>

Bezeichnung <input type="text" value="<?php echo($componentData['comp_description']) ?>" /><br>
Hersteller <input type="text" value="<?php echo($componentData['comp_manufacturer']) ?>" /><br>
Typ <input type="text" value="<?php echo($componentData['coty_name']) ?>"/><br>
Attribute 
<textarea style="width: 16rem; height: 8rem;" disabled>
<?php 
	foreach($componentAttributes as $attribute)
	{
		echo($attribute['coat_name']."\n");
	}
?>
</textarea><br>
Gewährleistungsdauer <input type="text" value="<?php echo($componentData['comp_warranty_end']) ?>" /><br>
Notiz <textarea> <?php echo($componentData['comp_note']) ?> </textarea><br>
Lieferant <input type="text" value="<?php echo($componentData['supl_name']) ?>" /><br>
In Raum <input type="text" style="width: 18rem;" value="<?php echo($componentData['room_description']." (Raum-Nummer ".$componentData['room_number'].")")?>" /><br>
Erstellt am <input type="text" value="<?php echo($componentData['comp_created']) ?>" /><br>
<input type="submit" name="btnSaveComponentChanges" value="Speichern" />

<?php
	// Das hier muss in jeder View eingetragen werden.
	require_once("../footer.php");
?>