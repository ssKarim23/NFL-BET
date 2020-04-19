<!DOCTYPE html>
<html>
    <head>
    	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Inscription</title>
	</head>

<body>

<?php
   if($_GET['dep']=="" || $_GET['codep']=="" || $_GET['statut']=="" || $_GET['mdp']!= $_GET['mdp1']|| $_GET['mail']==""|| $_GET['cond']=="")//si un des champs est vide
   {//recharge la page en remplissant les champs remplis
   	echo '<meta http-equiv="refresh" content="0; URL=../inscription/formulaire.php?dep='.$_GET['dep'].'&codep='.$_GET['codep'].'&statut='.$_GET['statut'].'&mail='.$_GET['mail'].'" />';
   }

else
  {//sinon insere les infos du nouvel utilisateur dans la bd
     INCLUDE('../main/bd.php');
     $bdd=getBD();
     echo "dep" .$_GET['dep'];
     echo "codep" .$_GET['codep'];
     echo "statut" .$_GET['statut'];
     echo "mail" .$_GET['mail'];
     echo "mdp" .$_GET['mdp'];

     $req='insert into utilisateur(departement,codepostal,statut,mail,mdp)
     values(
         '.$_GET['dep'].',
         '.$_GET['codep'].',
         "'.$_GET['statut'].'",
         "'.$_GET['mail'].'",
         "'.$_GET['mdp'].'"
       );';

       echo $req;
       $bdd->query($req);
       echo '<meta http-equiv="refresh" content="0; URL=../main/index.php"/>';//redirige vers page index
   }
?>




</body>
</html>
