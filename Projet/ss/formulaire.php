<?php
session_start();
?>




<!DOCTYPE html>



<html>
<head>
	 <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title>Inscription</title>
	<div class="block">


	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">
	<!--FONT-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/adbe6815a1.js" crossorigin="anonymous"></script>
</head>

<body>


<div class="block"> 
	<header class="header">
		
		<a href="../main/index.php" class="logo"><img src="../src/img/logo.png"></a>
		<a href="../main/index.php" class="header-logo"> NFL BET </a>
		<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
		
		<nav class="header-menu">
			<a href="index.php">Accueil</a>
			<a href="articles-press.php"> Articles & Press</a>
			<a href="../searchbar.php"> Rechercher</a>
			<a href="#"> Calendrier et résultats</a>
			
			<a href="../contacts/contacts.php"><button class="button is-link">Nous contactez</button></a>
			
		</nav>
	</header>
</div>


	<!--formulaire inscription-->

<div class="block">
	<div></div>
	<footer class="footer">
		<h1 class="title is-1">Inscription</h1>
		<div class="footer-contact-form">
			 <form  method="get" action="inscription.php" autocomplete="off" >

				<div class="field">
  					<label class="label">Nom</label>
				  <div class="control">
				    <input class="input" name="nom" type="text" placeholder="e.g Salah salah" value="<?php if(isset($_GET['nom'])){echo $_GET['nom'];} ?>">
				  </div>
				</div>

				<div class="field">
  					<label class="label">Prénom</label>
				  <div class="control">
				    <input class="input" name="prenom" type="text" placeholder="e.g Karim" value="<?php if(isset($_GET['prenom'])){echo $_GET['prenom'];} ?>">
				  </div>
				</div>

				<div class="field">
						<label class="label">Pays</label>
					<div class="control">
						<input class="input" name="pays" type="text" placeholder="e.g Karim" value="<?php if(isset($_GET['pays'])){echo $_GET['pays'];} ?>">
					</div>
				</div>

				<div class="field">
					<label class="label">Email</label>
				<div class="control">
					<input class="input" name="email" type="text" placeholder="e.g sskarim23@gmail.com" value="<?php if(isset($_GET['email'])){echo $_GET['email'];} ?>">
				</div>
			</div>

					<div class="field">
  					<label class="label">Mot de passe</label>
				  <div class="control">
				    <input class="input" name="mdp" type="text" placeholder="e.g ma requette est la suivante" value="<?php if(isset($_GET['mdp'])){echo $_GET['mdp'];} ?>">
				    <div class="control">
				    </div>
				</div>

				    	<div class="field">
  					<label class="label">Confirmation du mot de passe</label>
				  <div class="control">
				    <input class="input" name="mdp1" type="text" placeholder="e.g sskarim23@gmail.com">
				  </div>

			 		<div class="control">
			 			
					    <input type="Submit" value="sign up" >

					</div>

					</div>

				  </div>
				</div>

			 </form>

		</div>
		<div class="footer-information">
			<p>Route de Mende, 34090 Montpellier</p>
			<p>00 33 66 93 06 82 0</p>

</body>
</html>
