<?php
session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="shortcut icon" href="../src/img/favicon.ico">
	<title>NFL BET</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
	<link rel="stylesheet" type="text/css" href="../src/css/style.css">

	<!--FONT-->
	
	
	<link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@1,400;1,700&family=Patua+One&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
	
	<script src="https://kit.fontawesome.com/adbe6815a1.js" crossorigin="anonymous"></script>
	
  </head>
</head>




<body>


<!--header-->
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





<!--background-->
<div class="block">
	<div class="banner">
		<img src="../src/img/bg.jpg" alt="stade et ballon" class="banner-image">
		<div class="banner-content">
			<h1 class="title is-1">BIENVENUE SUR NFL BET </h1>
			<h2 class="subtitle">Découvrez le football Américain </h2>
			
			<?php
			if (isset($_SESSION['utilisateur'])) {
				echo '<a href="../sessions/deconnexion.php"><button class="button is-link"> DECONNEXION </button></a>';
				echo '<h3 class="subtitle"><a href="#"> connécté</a></h3>';

				
			}
			else {
			echo '<a href="../sessions/connexion.php"><button class="button is-link"> CONNEXION </button></a>';
			echo '<h3 class="subtitle"><a href="../ss/formulaire.php"> Pas ecore inscrit?</a></h3>';

			}
			?>
			
		</div>
			
	</div>
</div>
<!--background-->

<!--à propos-->
<div class ="block">
	<div class="container about">
		<div class="columns">
			<div class="column about-single-element"><i class="fas fa-calendar-week icon"></i>
				<p>Lorsque vous pariez, il est important de faire des recherches préalables sur les équipes, les joueurs, les entraîneurs et le site avant de placer votre pari. Plus vous en savez sur le sport, plus vous avez de chances de placer un pari gagnant.
				<br><br>Nous vous fournissons les News, analyses, résultats, calendrier des playoffs et toute l'actu de la NFL et de ses joueurs !<br><br> De plus, notre bookmaker est optimisé pour PC et mobile, afin que vous puissiez placer vos mises où que vous soyez, à tout moment.</p></div>
			<div class="column about-single-element"><i class="fas fa-tasks icon"></i>
				<p>Que vous soyez débutant, ou véritable aficionados, nous vous aiderons à dénicher le marché qui vous convient avec les meilleures cotes. 
				<br><br>Nous sommes engagés à vos côtés pour proposer un environnement de paris sportifs à la fois sûr et sécurisé, divertissant et innovant. 
				<br><br> Pour les newcomer, on vous propose des paris référencés sous le nom de « the spread » ou « the line » c'est essentiellement une forme de pari à handicap, commencez par être des observateurs, jouez peu et sur.</p></div>

			<div class="column about-single-element"><i class="fas fa-football-ball icon"></i>
				<p>Le football américain est un sport scruté dans ses moindres détails. Regardez les stats de chaque équipes est presque aussi importantes que le noms des joueurs.
				<br><br>Pour les entraineurs, recruteurs et agents sportifs nous proposons des stats détaillées fournis par des professionnels formés qui étudient tous les aspects du jeu : <br><br>Le classement, niveau et Écart entre les 2 équipes, le score à la fin du match et à la fin de chaque quart-temps, Nombre de touchdowns et de field goals, total et par marqueur, à la minute...</p></div>

			
		</div>
	</div>
</div>
<!--à propos-->



<!-- footer-->
<div class="block">
	<footer class="footer">
		<div class="footer-information">
			<p>Route de Mende, 34090 Montpellier</p>
			<p>00 33 66 93 06 82 0</p>
		</div> 
	</footer>
</div>
<!-- footer-->



<!--JS-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="src/js/main.js"></script>

</body>
</html>