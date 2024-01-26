<?php
try
{
    // on se connecte à mysql
      $bdd = new PDO('mysql:host=localhost;dbname=produit;charset-utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrete tout
      die('Erreur : '.$e->getMessage());
}

    // si tout va bien, on peut continuer      

?>
