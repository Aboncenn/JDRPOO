<?php
require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Objets.php';
require_once  'classes/Monstre.php';
require_once  'classes/Objets.php';
require_once  'classes/Salle.php';
require 'config.php';

$perso = isset($_POST['perso'])?$_POST['perso']:'';
$choix = $_POST['attaquer'];
$Jeu = $_SESSION['jeu'];
$lastperso = $Jeu->personnage;
$monstre = $_SESSION['monstre'];

if($choix == 'attaquer') {

    $lastperso->attaque($monstre);

    if ($monstre->vie > 0) {
        echo "le monstre a " . $monstre->vie . " de vie";


    } else {
        echo "Le monstre est mort";
    }

    $monstre->attaque($lastperso);

    if ($lastperso->vie > 0) {
        echo "le perso a " . $lastperso->vie . "de vie";

    } else {
        echo "Le " . $lastperso->nom . " est mort";
    }

    $_SESSION['jeu'] = $Jeu;
    $_SESSION['monstre'] = $monstre;


    header('Location: game.php');
}