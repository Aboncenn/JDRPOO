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
    public $coffre9 = array('potion', 'rail de cocaine', "épée", "sceptre");

    public function ouvrir($coffre9)
    {
        $this->coffre9 = array_rand($coffre9, 1);
    }
}



