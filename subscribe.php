<?php
$email = $_POST['newsletter_email'];

mail("serre_sebastien@hotmail.fr","LeTechlab - Inscription newsletter","Merci d'ajouter $email à la mail list.");

echo "Votre inscription à la newsletter a bien été prise en compte. Merci de votre intéret pour Le Techlab.";

// ###################################################################
//					ENREGISTREMENT DES DONNEES DANS FICHIER
// ###################################################################

$fichier_ecrire = fopen("newsletter.txt", "a+");
fwrite($fichier_ecrire, $email."\n");
fclose($fichier_ecrire);

?>