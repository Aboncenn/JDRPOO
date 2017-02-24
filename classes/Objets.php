<?php

class Arme {


    public $puissance = 2;
    public $puissanceM = 5;


}

class Epee extends Arme{

    public $puissance = 10;
    public $puissanceM = 1;

}


class Sceptre extends Arme {

    public $puissance = 2;
    public $puissanceM = 8;

}

class RaildeCoc{
    public $vitesse = 150;
}

class Potion{
        public $vie;
    public function heal(){

        $this->vie = $this->vie + 20;

    }

}

class Coffre
{
    public static $listeobjetspossibles = array('potion', 'rail de cocaine', 'épée', 'sceptre');

    public function ouvrir(){
        $nomobjet = array_rand(self::$listeobjetspossibles, 1);

        switch($nomobjet) {
            case 'potion': return new Potion();
            case 'rail de cocaine': return new RaildeCoc();
            case 'épée': return new Epee();
            case 'sceptre': return new Sceptre();
        }
    }
}



