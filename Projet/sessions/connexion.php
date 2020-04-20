
<!DOCTYPE html>
<html>
<meta charset="utf-8">
	
	<link rel="shortcut icon" href="../src/img/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">
<title>Connexion</title>
	<link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@1,400;1,700&family=Patua+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	<!--Rana-->
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
			<a href=""> Calendrier et résultats</a>
			
			<a href="../contacts/contacts.php"><button class="button is-link">Nous contactez</button></a>
			
		</nav>
	</header>
</div>



	
	<div class="block">
	<div class="banner1">
		<img src="../src/img/bg.jpg" alt="stade et ballon" class="banner-image">
	</div>
	<div class="connection-form">
		<img src="../src/img/2.png" alt="avatar" class="avatar">
		<h2>CONNEXION</h2>

	<a href="../ss/inscription.php" class="active"> Inscription </a>
	<form method="get" action="connecter.php" autocomplete="off">
	<p>Adresse email <INPUT type="text" name="user_mail" value="<?php if(isset($_GET['user_mail'])){echo $_GET['user_mail'];} ?>"></p>
	<p>Mot de passe <INPUT type="password" name="user_password" value=""></p>
<p>
<input type="submit" value="Connexion">
</p>
	</form>


</body>
</html>
