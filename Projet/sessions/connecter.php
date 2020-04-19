<?php
session_start();
?>
<html>
<head>
<title>Connexion</title>

<?php

$utilisateur = new PDO('mysql:host=localhost;dbname=projet;charset=utf8','', 'root');
$user_mail = $_GET['user_mail'];
$user_password = $_GET['user_password'];

if($_GET['user_password']!="" && $_GET['user_mail']!="") {
	$rep = $utilisateur->query("select * from utilisateur where email='$user_mail' and mdp='$user_password'");
	$info = $rep->fetch();
	if($_GET['user_password']==$info["mdp"] && $_GET['user_mail']==$info["email"]) {
		$_SESSION['utilisateur']=array('user_mail'=>$info['email'],'user_password'=>$info['mdp'],'user_country'=>$info['pays'],'user_birth'=>$info['date_naissance']);
		echo "<meta http-equiv='refresh'; content='0;URL=../main/index.php'>";
		}
		else{
	echo "Informations erronées";
	echo "<meta http-equiv='refresh' content='10;URL=../main/index.php?user_mail=".$_GET['user_mail']."'>";
}
}
else{
	echo "Informations erronées";
	echo "<meta http-equiv='refresh' content='0;URL=../main/index.php?user_mail=".$_GET['user_mail']."'>";
}

?>


</head>
<body>
</body>
</html>
