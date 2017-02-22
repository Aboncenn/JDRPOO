<?php


class Jeu {


    public function creation($perso){



        if($perso == "paladin"){
            $perso  = new Paladin('Paladin');

        }




        elseif($perso  == "guerrier"){
            $perso  = new Guerrier('Guerrier');


        }
        elseif($perso == "magicien"){
            $perso  = new Magicien('Magicien');


        }



    }



}