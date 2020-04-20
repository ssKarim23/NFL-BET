<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Inscription</title>
	</head>

<body>

<?php


   if($_GET['nom']=="" || $_GET['prenom']=="" || $_GET['pays']=="" || $_GET['email']==""|| $_GET['mdp']=="")


   {
    echo "test";
   	echo '<meta http-equiv="refresh" content="0; URL=formulaire.php?nom='.$_GET['nom'].'&prenom='.$_GET['prenom'].'&pays='.$_GET['pays'].'&email='.$_GET['email'].'&mdp='.$_GET['mdp'].'" />';

   }

else
  {
     INCLUDE('../main/donnee.php');
     
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
       

       echo $req;
       $bdd->query($req);
       echo '<meta http-equiv="refresh" content="0; URL=../sessions/connexion.php"/>';
   }
?>




</body>
</html>
