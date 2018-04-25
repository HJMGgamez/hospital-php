<?php
	if ($patientsPage === true){
?>
		<form action="<?= URL ?>hospital/createNewPatients" method='POST'>
 			<p>Patient name</p><input type='text' name='patientName'><br>
			<p>select species</p><select name="species">
		<?php 
		foreach ($species as $species) {
		?>
        	<option value="<?= $species["species_id"] ?>"><?= $species["species_description"] ?></option>
		<?php 
    }
		?>
 	 		</select><br>
 	 	<p>select gender</p>
 	 	male<input type="radio" name="gender" value="1" checked>
 	 	female<input type="radio" name="gender" value="2" >
 	 	other<input type="radio" name="gender" value="3" ><br>
 	 		<p>select client</p><select name="clients">
		<?php 
		foreach ($clients as $client) {
		?>
        	<option value="<?= $client["client_id"] ?>"><?= $client["client_firstname"] ."&nbsp;". $client["client_lastname"] ?></option>
		<?php 
    }
		?>
 	 		</select><br>
 	 		<p>status</p><textarea name="status" rows="10" cols="30"><?= $client["client_id"] ?></textarea><br>
 	 	<input type="submit" value="Create">
 	 </form>
 <?php } elseif ($clientPage === true){ ?>
 		<form action="<?= URL ?>hospital/createNewClient" method='POST'>
 			<p>first name</p><input type='text' name='firstname'><br>
 			<p>last name</p><input type='text' name='lastname'><br>
 			<p>Email</p><input type='text' name='email'><br>
 			<p>phone number</p><input type='text' name='phone'><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } elseif ($speciePage === true){ ?>
 		<form action="<?= URL ?>hospital/createNewSpecies" method='POST'>
 			<p>soort</p><input type='text' name='soort'><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } ?>