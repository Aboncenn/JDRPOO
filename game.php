<?php
require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Objets.php';
require_once  'classes/Monstre.php';
require_once  'classes/Objets.php';
require_once  'classes/Salle.php';
require 'config.php';
$salle=0;
$direction=null;
$perso = isset($_POST['perso'])?$_POST['perso']:'';
if(!isset($_SESSION['salle'])) {
    Salle::initDonjon();
    Salle::SelecEmpty();
    Salle::Porte();
    $salle = Salle::$Tab_salle[1][1];
    $_SESSION['salles'] = serialize(Salle::$Tab_salle);
    $salle->nombreMonstres = 0;
}
else {
    $salle = $_SESSION['salle'];
    $salles = $_SESSION['salles'];
    $salle->nombreMonstre();
    $salle->Coffre();
}
if(isset($_GET['neighbor']) && $_GET['neighbor'] < count ($salle->neighbors)) {
    $newsalle = $salle->neighbors[$_GET['neighbor']];

    if($salle->x > $newsalle->x)
        $direction = 'west';
    else if($salle->x < $newsalle->x)
        $direction = 'east';
    else if($salle->y > $newsalle->y)
        $direction = 'nord';
    else if($salle->y > $newsalle->y)
        $direction = 'sud';
    else{ $direction = null; };
    $salle = $newsalle;
}
$_SESSION['salle']= $salle;
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
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>
<button type="button" value="" class="btn btn-danger" onClick="window.open('profil.php')">Fiche personnage</button>
<br>
    <p> Devant vous, vous avez <?php echo count($salle->nombreMonstres); ?> Monstres !</p>

    <form method="post" onClick="window.open('combat.php')">
        <input type="radio" name="attaquer" value="attaquer"> attaquer le monstre (reçevoir les dégats également)<br>
        <input type="radio" name="vehicle" value="Car"> On verra après<br>
        <input class="btn btn-danger" type="submit" value="Valider son choix">
    </form>
    <br>
<?php
// Boucle FOR Portes
foreach ($salle->neighbors as $key => $neighbor) {
    echo '<a href="game.php?neighbor=' . $key . '" class="btn btn-info">Ouvrir porte ' . $direction . '</a>';
}
?>
<br>
<?php
for ($i = 1; $i <= count($salle->coffres); $i++) {
    ?>
    <button onClick="window.open('ajoutObjet.php')" type="button" class="btn btn-info">Ouvrir coffre</button>
<?php
}
?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
