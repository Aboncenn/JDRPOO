
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
    public $critique =0;

    protected function empecher_negatif(){
        if ($this->vie <= 0) {
            $this->vie = 0;
        }
    }

    /* FONCTIONS D'ACTION */

    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();

    }
    public function critique($atk){
    $stat=rand(1,100);
        if($stat < 5){
            $critique= $atk*1.5;
        }else{
            $critique=0;
        }
    }

    public function heal(){

            $this->vie = $this->vie + 20;

    }

    public function miss(){

    }

    /* FIN FONCTIONS D'ACTION */

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
    public $name = 'Gurdil';


}

class Magicien extends Personnage{
    public $magie = 60;
    public $name = 'Gandoulf';

}

class Paladin extends Personnage{
    public $atk = 50;
    public $magie = 40;
    public $nom = 'Jean-Palouf';

}

class Paysan extends Personnage {


}

