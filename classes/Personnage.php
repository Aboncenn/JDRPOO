
<?php

class Personnage {
    const MAX_VIE = 100;
    public $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
    public $vie = 100;
    public $atk = 10;
    public $magie = 10;
    public $def = 50;


    protected function empecher_negatif(){
        if ($this->vie <= 0) {
            $this->vie = 0;
        }
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();

    }


    public function heal(){

            $this->vie = $this->vie + 20;

    }

    public function mort(){
        if ($this->vie = 0) {
            echo "Naaaaaaon. Votre personnage est mort :'(";
            header('Location: index.php');
        }
    }




}

class Guerrier extends Personnage{
    public $atk = 100;
    public $magie = 0;


}

class Magicien extends Personnage{
    public $magie = 60;

}

class Paladin extends Personnage{
    public $atk = 50;
    public $magie = 40;

}

class Paysan extends Personnage {


}




