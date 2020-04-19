<?php
   		function getBD()
      {
   			$bdd = new PDO('mysql:host=localhost;dbname=projet-nfl;charset=utf8', 'root', '');
   			return $bdd;
   		}


if (extension_loaded ('PDO')) {
echo 'PDO OK'; 
} else {
echo 'PDO KO'; 
}
?>