<?php

function getBD(){
	try 

{
    $bdd = new PDO('mysql:host=localhost;dbname=nfl', 'root', 'root');
    echo "SALMA";
    return $bdd;
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

}
?>