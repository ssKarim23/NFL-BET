<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Inscription</title>
	</head>

<body>

<?php

echo "tra";
   if($_GET['nom']=="" || $_GET['prenom']=="" || $_GET['pays']=="" || $_GET['email']==""|| $_GET['mdp']=="")//si un des champs est vide

   {//recharge la page en remplissant les champs remplis
    echo "baro";
   	echo '<meta http-equiv="refresh" content="20; URL=formulaire.php?nom='.$_GET['nom'].'&prenom='.$_GET['prenom'].'&pays='.$_GET['pays'].'&email='.$_GET['email'].'&mdp='.$_GET['mdp'].'" />';

   }

else
  {//sinon insere les infos du nouvel utilisateur dans la bd
     INCLUDE('../main/donnee.php');
     echo "ABDEL";
     $bdd=getBD();
     echo "nom" .$_GET['nom'];
     echo "prenom" .$_GET['prenom'];
     echo "pays" .$_GET['pays'];
     echo "email" .$_GET['email'];
     echo "mdp" .$_GET['mdp'];

     $req='insert into utilisateur(nom,prenom,pays,email,mdp,id_user)
     values(
         "'.$_GET['nom'].'",
         "'.$_GET['prenom'].'",
         "'.$_GET['pays'].'",
         "'.$_GET['email'].'",
         "'.$_GET['mdp'].'", 0
       );';
       echo "blallal";

       echo $req;
       $bdd->query($req);
       echo '<meta http-equiv="refresh" content="20; URL=../main/index.html"/>';//redirige vers page index
   }
?>




</body>
</html>
