<?php
require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Objets.php';
require_once  'classes/Monstre.php';
require_once  'classes/Objets.php';
require_once  'classes/Salle.php';
require 'config.php';

$perso = isset($_POST['perso'])?$_POST['perso']:'';

$Jeu = new Jeu();
$Jeu->creation($perso);
$x = 0;
$y = 0;
$salle = new Salle($x,$y);
$salle->initDonjon($x, $y);
$_SESSION['salle'] = $salle;
var_dump($_SESSION);
$coffre1 = new Coffre();
$coffre1->coffre9;
$coffre1->ouvrir($coffre9);

var_dump($coffre1);

?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fiche Personnage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"/>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<button type="button" value="" class="btn btn-danger" onClick="window.open('profil.php')">Fiche personnage</button>

<?php


$perso = isset($_POST['perso'])?$_POST['perso']:'';
$x = 0;
$y = 0;
$salle = new Salle($x,$y);
$salle->initDonjon($x, $y);
$_SESSION['salle'] = $salle;

$Jeu = new Jeu();
$Jeu->creation($perso);

$coffre1 = new Coffre();
$coffre1->ouvrir($coffre);

var_dump($_SESSION);
var_dump($coffre1->coffre);


// Boucle FOR

for ($i = 1; ; $i++) {
    if ($i > $salle->porte) {
        break;
    }
    echo '<button href="#" type="button" class="btn btn-info">Ouvrir porte ' . $i . '</button>';
}


?>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

