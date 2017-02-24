<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiche Personnage</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"/>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>


</head>
<body>

<?php
require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Objets.php';
require_once  'classes/Monstre.php';
require_once  'classes/Objets.php';
require_once  'classes/Salle.php';
require 'config.php';
?>


<h1>Fiche personnage : </h1>

<?php

$perso = (isset($_POST['perso'])?$_POST['perso']:(isset($_SESSION['perso'])?$_SESSION['perso']:''));
$Jeu = new Jeu();
$Jeu->creation($perso);
$Jeu = $_SESSION['jeu'];

?>


<div class="stats col-md-4">
    <ul id="liste1">
        <li><p> PV : <?php echo $Jeu->vie; ?></p></li>
        <li><p> ATK : <?php echo $Jeu->atk; ?></p></li>
        <li><p> MANA : <?php echo $Jeu->magie; ?></p></li>
        <li><p> DEFENSE : <?php echo $Jeu->def; ?></p></li>
    </ul>
</div>

<div class="inventaire col-md-8">
    <div class="objets">

    </div>
    <div class="popo">

    </div>
    <div class="autre">

    </div>


</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>