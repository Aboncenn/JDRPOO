<?php
session_start();


require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';

$perso = isset($_POST['perso'])?$_POST['perso']:'';


$Jeu = new Jeu();
$Jeu->creation($perso);

$_SESSION['personnage'] = $Jeu->personnage;

var_dump($Jeu->personnage);

?>


<h3>Commencer un partie avec le : <?php echo $Jeu->personnage->nom; ?></h3> <input type="button" value="Start" class="btn btn-danger" onClick="document.location.href='game.php'" />
<h5>Choisir un personnage autre que </h5> <?php echo $Jeu->personnage->nom; ?><input type="button" value="Changer" class="btn btn-danger" onClick="document.location.href='index.php'" />






