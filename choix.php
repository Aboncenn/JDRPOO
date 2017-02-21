<?php

require 'classes/Personnage.php';

$personnage = $_POST['personnage'];

if($personnage == "paladin"){
    $personnage  = new Paladin('Paladin');


}


if($personnage == "magicien"){
    $personnage  = new Magicien('Magicien');


}

if($personnage  == "guerrier"){
    $personnage  = new Guerrier('Guerrier');

}

echo "Je suis un " .$personnage->nom;


?>

<h3>Commencer un partie avec le <?php echo $personnage->nom;?> :</h3> <input type="button" value="Start" class="btn btn-danger" onClick="document.location.href='game.php'" />
<h5>Choisir un personnage autre que <?php echo $personnage->nom;?></h5> <input type="button" value="Changer" class="btn btn-danger" onClick="document.location.href='index.php'" />






