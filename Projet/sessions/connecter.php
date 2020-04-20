<?php
session_start();
?>
<html>
<head>
<title>Connexion</title>

<?php
INCLUDE('../main/donnee.php');
$utilisateur = getBD();
$user_mail = $_GET['user_mail'];
$user_password = $_GET['user_password'];

if($_GET['user_password']!="" && $_GET['user_mail']!="") {
	$rep = $utilisateur->query("select * from utilisateur where email='$user_mail' and mdp='$user_password'");
	$info = $rep->fetch();
	if($_GET['user_password']==$info["mdp"] && $_GET['user_mail']==$info["email"]) {
		$_SESSION['utilisateur']=array('user_mail'=>$info['email'],'user_password'=>$info['mdp'],'user_country'=>$info['pays']);
		echo "<meta http-equiv='refresh'; content='5;URL=../main/index.php'>";
		}
		else{
	echo "Informations erronées";
	echo "<meta http-equiv='refresh' content='5;URL=../main/index.php?user_mail=".$_GET['user_mail']."'>";
}
}
else{
	echo "Informations erronées";
	echo "<meta http-equiv='refresh' content='5;URL=../main/index.php?user_mail=".$_GET['user_mail']."'>";
}

?>


</head>
<body>
</body>
</html>
