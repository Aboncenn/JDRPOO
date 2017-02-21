<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>JDR</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<h3>Commencer un partie :</h3> <input type="button" value="Start" class="btn btn-danger" onClick="document.location.href='game.php'" />

<hr>

<strong> ZONE TEST VARIABLES / CLASSES </strong>

<?php
require 'classes/Personnage.php';
require_once 'classes/Start.php';
require 'game.php';
require 'classes/Start.php';


$paladin = new Paladin('Paladin');
$guerrier = new Guerrier('Guerrier');
$magicien = new Magicien('Magicien');

?>


<p> Quel personnage veux tu choisir ?</p>
<form method="post">
    <select name="personnage" id="personnage">
        <option value="paladin">  <?php echo $paladin->nom; ?> <br></option>
        <option value="guerrier">  <?php echo $guerrier->nom; ?> <br></option>
        <option value="magicien">  <?php echo $magicien->nom;?> <br></option>
    </select>
    <input type="submit" value="choisir mon personnage">


</form>

<?php
var_dump($guerrier, $magicien, $paladin);

?>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>



