<?php

class Monstre{

    public $i;
    public $nom = "monstre";
    public $vie = 50;
    public $atk = 15;
    public $def;
    public $speed;


   /* public function generate_stat(){
        $this->i = rand(0,1);

        if ($this->i == 0){
            $this->nom = "Gobelin";
            $this->vie = rand(40,60);
            $this->atk = rand(5,15);
            $this->def = rand(5,15);
            $this->speed = rand(60,70);
        } else {
            $this->nom = "Magicien noir";
            $this->vie = rand(50,70);
            $this->atk = rand(30,50);
            $this->def = rand(20,30);
            $this->speed = rand(20,30);
        }
    }*/
    /**
     * @return mixed
     */
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

    public function mort(){
        if ($this->vie <= 0) {
            echo "Le monstre est mort";
        }
    }

    public function attaque($cible){
        $cible->vie -= $this->atk;
    }


}



