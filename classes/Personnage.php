<?php

class Personnage {
    const MAX_VIE = 100;
    public $nom;
    public function __construct($nom){
        $this->nom = $nom;
    }
    public $vie = 100;
    public $atk = 10;
    public $vitesse = 150;
    public $magie = 10;
    public $def = 50;
    public $critique =0;

    protected function empecher_negatif(){
        if ($this->vie <= 0) {
            $this->vie = 0;
        }
    }

    /* FONCTIONS D'ACTION */


    public function critique($atk){
    $stat=rand(1,100);
        if($stat <= 5){
            $critique= $atk*1.5;
        }else{
            $critique=0;
        }
    }

    public function attaque($cible,$critique){
        $cible->vie -= $this->atk+ $critique;
        $cible->empecher_negatif();

    }
    public function miss($atk){
        $stat=rand(1,100);
            if($stat <= 8){
                $miss=$atk == 0;
            }else{
                $miss=0;
            }
    }

    public function heal(){

        $this->vie = $this->vie + 20;

    }

    /* FIN FONCTIONS D'ACTION */

    public function mort(){
        if ($this->vie = 0) {
            echo "Naaaaaan. Votre personnage est mort :'(";
            header('Location: index.php');
        }
    }



}

    /* DES PNJ UN PEUX POURRIS */

class Guerrier extends Personnage{
    public $atk = 100;
    public $vitesse = 30;
    public $magie = 0;

}

class Magicien extends Personnage{
    public $magie = 60;
    public $vitesse = 50;


}

class Paladin extends Personnage{
    public $atk = 50;
    public $magie = 40;
    public $vitesse = 45;


}
