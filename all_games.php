<?php

try
{

    $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $e)
{

    die('Erreur : '.$e->getMessage());
}



$reponse = $bdd->query('SELECT nom, prix, console FROM jeux_video');

echo '<ul class="list-unstyled card-columns mt-5">';

while ($donnees = $reponse->fetch())
{
    echo '<li class="border border-light m-2 text-center">' . $donnees['nom'] . ' (' . $donnees['prix'] . ' EUR) <strong class="text-primary">' .$donnees['console'].'</strong></li>';
}
echo '</ul>';
$reponse->closeCursor();