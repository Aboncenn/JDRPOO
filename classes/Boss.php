<?php

class Boss{

    private $nom;
    private $vie;
    private $atk;
    private $def;
    private $speed;

    private function genrerate_stat(){
        $this->nom = "Smoke";
        $this->vie = rand(200,300);
        $this->atk = rand(100,150);
        $this->def = rand(80,120);
        $this->speed = rand(5,20);
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
    public function getVie()
    {
        return $this->vie;
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