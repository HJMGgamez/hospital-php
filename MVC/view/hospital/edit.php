 <?php if ($clientPage === true){ ?>
 		<form action="<?= URL ?>hospital/editClients/<?= $client["client_id"] ?>" method='POST'>
 			<p>first name</p><input type='text' name='firstname' value="<?= $client["client_firstname"]; ?>"><br>
 			<p>last name</p><input type='text' name='lastname' value="<?= $client["client_lastname"]; ?>"><br>
 			<p>Email</p><input type='text' name='email' value="<?= $client["client_phone"]; ?>"><br>
 			<p>phone number</p><input type='text' name='phone' value="<?= $client["client_Email"]; ?>"><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } elseif ($speciePage === true){ ?>
 		<form action="<?= URL ?>hospital/editSpecies/<?= $specie["species_id"] ?>" method='POST'>
 			<p>soort</p><input type='text' name='soort' value="<?= $specie["species_description"]; ?>"><br>
 		<input type="submit" value="Create">
 	</form>
 <?php } elseif ($patientPage === true){ ?>
 		<form action="<?= URL ?>hospital/editPatients/<?= $patient["patient_id"] ?>" method='POST'>
 			<p>Patient name</p><input type='text' name='patientName' value="<?= $patient["patient_name"]; ?>"><br>
 			<p>status</p><textarea name="status" rows="10" cols="30"><?= $patient["patient_status"]; ?></textarea><br>
 	 	<input type="submit" value="Create">
 <?php } ?>