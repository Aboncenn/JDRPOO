<button type="button" value="" class="btn btn-danger" onClick="window.open('profil.php')">Fiche personnage</button>



<?php

require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once  'classes/Monstre.php';
require_once 'config.php';


$perso = isset($_POST['perso'])?$_POST['perso']:'';

$Jeu = new Jeu();
$Jeu->creation($perso);


$_SESSION['personnage'] = $Jeu->personnage;

var_dump($_SESSION);

