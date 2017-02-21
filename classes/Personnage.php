
<?php

class Personnage {
    public $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
    public $vie = 100;
    public $atk = 10;
    public $magie = 10;
    public $def = 50;

}

class Guerrier extends Personnage{
    public $atk = 100;


}

class Magicien extends Personnage{
    public $magie = 60;

}

class Paladin extends Personnage{
    public $atk = 50;
    public $magie = 40;

}




