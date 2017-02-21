<?php

class Monstre{

    public $vie = 30;
    public $atk = 10;

    public function mort(){
        if ($this->vie <= 0) {
            echo "Le monstre est mort";
        }
    }

    protected function empecher_negatif(){
        if ($this->vie <= 0) {
            $this->vie = 0;
        }
    }
    public function attaque($cible){
        $cible->vie -= $this->atk;
        $cible->empecher_negatif();

    }


}



