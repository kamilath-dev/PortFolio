<?php

if(isset($_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['sexe'], $_POST['pays'])) {
	// Récupère les informations du formulaire
	$name = $_POST['nom'];
	$surname = $_POST['prenom'];
	$email = $_POST['email'];
	$gender = $_POST['sexe'];
	$country = $_POST['pays'];

	// Connexion à la base de données
	$db = mysqli_connect('localhost', 'root', '', 'bddname');

	// Ajout des informations dans la base de données
	$query = "INSERT INTO users (name, surname, email, gender, country) VALUES ('$name', '$surname', '$email', '$gender', '$country')";
	mysqli_query($db, $query);
	
	// Redirige vers la page principale
	header('location: index.php');
}

?>



<form action="envoi.php" method="post">
	<div class="form-group">
		<label for="name">Nom :</label>
		<input type="text" name="name" class="form-control" id="name" placeholder="Entrer votre nom">
	</div>
	<div class="form-group">
		<label for="surname">Prenom :</label>
		<input type="text" name="surname" class="form-control" id="surname" placeholder="Entrer votre prénom">
	</div>
	<div class="form-group">
		<label for="email">Email :</label>
		<input type="email" name="email" class="form-control" id="email" placeholder="Entrer votre email">
	</div>
	<div class="form-group">
		<label for="gender">Sexe :</label>
		<select name="gender" class="form-control" id="gender">
			<option value="">Choisissez votre sexe</option>
			<option value="male">Masculin</option>
			<option value="female">Féminin</option>
		</select>
	</div>
	<div class="form-group">
		<label for="country">Pays :</label>
		<select name="country" class="form-control" id="country">
			<option value="">Choisissez votre pays</option>
			<option value="china">Chine</option>
			<option value="canada">Canada</option>
			<option value="paris">Paris</option>
			<option value="arabie">Arabie Saoudite</option>
		</select>
	</div>

	<button type="submit" value="enregistrer" name="enregistrer" class="btn btn-primary">Envoyer</button>
</form>

