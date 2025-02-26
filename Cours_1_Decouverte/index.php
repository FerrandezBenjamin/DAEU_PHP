<?php 

$name   = "Benjamin";
$age    = 30;
$adress = "28 Av. du Lac d'Annecy, 73370 Le Bourget-du-Lac";


function exprimeToi($nomDeLaVariableDuNom, $nomDeLaVariableDeLage, $nomDeLaVariableDeLadress)
{
    echo "Je m'appelle " . $nomDeLaVariableDuNom . ". J'ai " . $nomDeLaVariableDeLage . " ans et mon adresse est : " .$nomDeLaVariableDeLadress;
}

exprimeToi($name, $age, $adress);
?>