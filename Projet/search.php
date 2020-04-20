<?php
$servername = "localhost";
$username = "root";
$password ="root";
$database ="nfl";

$connexion=mysqli_connect($servername,$username,$password,$database);

?>
<?php
session_start();
?>

<!DOCTYPE html>
<html >
 <head >
   <meta charset="utf-8">
  
  <link rel="shortcut icon" href="../src/img/favicon.ico">
  <title>NFL BET</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
  <link rel="stylesheet" type="text/css" href="src/css/style.css">

  <!--FONT-->
  
  
  <link href="https://fonts.googleapis.com/css2?family=Racing+Sans+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cuprum:ital,wght@1,400;1,700&family=Patua+One&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
  
  <script src="https://kit.fontawesome.com/adbe6815a1.js" crossorigin="anonymous"></script>

   <title>RECHERCHE</title>
   <h1> Vos résultats de recherche</h1>

 </head>



   
   

<body>


<div class="block"> 
  <header class="header">
    
    <a href="main/index.php" class="logo"><img src="src/img/logo.png"></a>
    <a href="main/index.php" class="header-logo"> NFL BET </a>
    <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
    
    <nav class="header-menu">
      <a href="main/index.php">Accueil</a>
      <a href="main/articles-press.php"> Articles & Press</a>
      <a href="searchbar.php"> Rechercher</a>
      <a href=""> Calendrier et résultats</a>
      
      <a href="contacts/contacts.php"><button class="button is-link">Nous contactez</button></a>
      
    </nav>
  </header>
</div>






  <?php
if(isset($_POST['recherchebouton']) && !empty($_POST['recherche'])){

    $recherche = mysqli_real_escape_string($connexion, $_POST['recherche']); //connexion a la bd
    

    $sql = "select * from nfl where Team like '%$recherche%' ";


    $resultat = mysqli_query($connexion,$sql);
    $queryResultat = mysqli_num_rows($resultat);


    
    echo "<table> <tr> <th>nom pénom</th> <th>équipe</th> <th>age</th> <th>position</th>  <th>note</th> <th>Ecole</th>  <th>salaire $</th> </tr> ";

    if($queryResultat >0){//si recupere des resultats
        while($row = mysqli_fetch_assoc($resultat)){//on les affiche tous

              
              
              //print_r($row);
              echo"<tr><td>".$row['Name']."</td><td>".$row['Team']."</td><td>".$row['Age']."</td><td>".$row['Position']."</td><td>".$row['OVR']." </td><td>".$row['College']."</td><td>".$row['Salary']."</td>";




             
        }

    }else{//sinon affiche resultat introuvable
      echo " Résultat introuvable";
    }
}
else{//sinon affiche aucune valeur saisie
  echo "Aucune valeur saisie !";
}
echo "</table>";
 ?>



</body>
 </html>
