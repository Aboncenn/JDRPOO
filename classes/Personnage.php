<?php

class Personnage {
    const MAX_VIE = 100;
    public $nom;
    public $vie = 100;
    public $atk = 10;
    public $vitesse = 150;
    public $magie = 10;
    public $def = 50;
    public $critique =0;



    /* FONCTIONS D'ACTION */

    public function critique($atk){
    $stat=rand(1,100);
        if($stat <= 5){
            $critique= $atk*1.5;
        }else{
            $critique=0;
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;

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

    public function getVie()
    {
        return $this->vie;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getAtk()
    {
        return $this->atk;
    }

    /**
     * @return mixed
     */
    public function getDef()
    {
        return $this->def;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

}

    /* DES PNJ UN PEUX POURRIS */

class Guerrier extends Personnage{
    public $atk = 10;
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


/* GETTER ET SETTER */