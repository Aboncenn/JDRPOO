<?php

require_once 'classes/Personnage.php';
require_once 'classes/Jeu.php';
require_once 'classes/Monstre.php';
require 'config.php';

session_destroy();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JDR</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"/>

    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
</head>
<body>

<p> Quel personnage veux tu choisir ?</p>
<form method="post" action="choix.php">
    <select name="perso" id="perso">
        <option value="paladin">Paloufsamer <br></option>
        <option value="guerrier">  Warsamer<br></option>
        <option value="magicien"> Magosamer <br></option>
    </select>
    <input type="submit" value="choisir mon personnage">
</form>



<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>




