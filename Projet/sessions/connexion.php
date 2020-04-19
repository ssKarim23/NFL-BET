
<!DOCTYPE html>
<html>
<html>
<link rel="stylesheet" type="text/css" href="../src/css/style.css">

	<!--FONT-->
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet"> 
	 <script src="https://kit.fontawesome.com/adbe6815a1.js" crossorigin="anonymous"></script>
<title>Connexion</title>
</head>

<body>
	<h1> <a id="link" href="../main/index.php"> Projet </a></h1>

	<a href="../ss/inscription.php" class="active"> Inscription </a>
	<form method="get" action="connecter.php" autocomplete="off">
	<p>Adresse email <INPUT type="text" name="user_mail" value="<?php if(isset($_GET['user_mail'])){echo $_GET['user_mail'];} ?>"></p>
	<p>Mot de passe <INPUT type="password" name="user_password" value=""></p>
<p>
<input type="submit" value="Envoyer">
</p>
	</form>


</body>
</html>
