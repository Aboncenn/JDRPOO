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

    public $coffre = array('potion', 'rail de cocaine', "épée", "sceptre");

    public function ouvrir($coffre)
    {

        $this->coffre = array_rand($coffre, 1);
    }
}



