<?php
require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Objets.php';
require_once  'classes/Monstre.php';
require_once  'classes/Objets.php';
require_once  'classes/Salle.php';
require 'config.php';


/*$coffre9 = null;
$coffre1 = new Coffre();
$coffre1->ouvrir($coffre9);

var_dump($coffre1);*/

$Jeu = $_SESSION['jeu'];

if(!isset($_SESSION['monstre'])) {
    $monstre = new Monstre();
    $_SESSION['monstre'] = $monstre;
}
else {
    $monstre = $_SESSION['monstre'];
}

$x = 0;
$y = 0;
$Jeu->salle = new Salle($x,$y);
$Jeu->salle->initDonjon($x, $y);

$_SESSION['jeu'] = $Jeu;


 /* ATTAQUE */
?>

<?php



var_dump($_SESSION);


?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Fiche Personnage</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<button type="button" value="" class="btn btn-danger" onClick="window.open('profil.php')">Fiche personnage</button>


<form method="post" action="combat.php">
    <input type="checkbox" name="attaquer" value="attaquer"> attaquer le monstre (reçevoir les dégats également)<br>
    <input type="checkbox" name="vehicle" value="Car" checked="checked"> On verra après<br>
    <input type="submit" value="Submit">

</form>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>

