<?php


class Jeu{

    public $personnage;
    public function creation($perso){



        if($perso == "paladin"){
          $this->personnage =  new Paladin('Paladin');

        }
        elseif($perso  == "guerrier"){
                $this->personnage =  new Guerrier('Guerrier');


        }
        elseif($perso == "magicien"){
            $this->personnage =   new Magicien('Magicien');

        }

    }
}