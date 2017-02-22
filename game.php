<button type="button" value="" class="btn btn-danger" onClick="window.open('profil.php')">Fiche personnage</button>


<?php


session_start();

require_once 'classes/Jeu.php';
require_once 'classes/Personnage.php';
require_once  'classes/Monstre.php';

$_SESSION['personnage'] = $perso;


var_dump($perso);