
<?php
require 'Personnage.php';


    $paladin = new Paladin('Paladin');
    $guerrier = new Guerrier('Guerrier');
    $magicien = new Magicien('Magicien');

?> <p> Quel personnage veux tu choisir ?</p>
<form method="post">
    <select name="personnage" id="personnage">
        <option value="paladin">  <?php echo $paladin->nom; ?> <br></option>
        <option value="guerrier">  <?php  echo $guerrier->nom; ?> <br></option>
        <option value="magicien">  <?php    echo  $magicien->nom;?> <br></option>
    </select>
    <input type="submit" value="choisir mon personnage">


</form>

<?php
var_dump($guerrier, $magicien, $paladin);
