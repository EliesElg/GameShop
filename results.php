<?php
try
{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{

   die('Erreur : '.$e->getMessage());
}



$req = $bdd->prepare('SELECT nom, prix, console FROM jeux_video WHERE console = ?');
$req->execute(array($_POST['console']));
echo '<ul class="list-unstyled card-columns mt-5">';

while ($donnees = $req->fetch())
{
    echo '<li class="border border-light m-2 text-center">' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR) <strong class="text-primary">' .$donnees['console']. '</strong></li>';
}
echo '</ul>';
$req->closeCursor();

