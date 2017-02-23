<?php

Class Salle {
    public $Empty=[];
    public $porte=1;
    public static $m =3;
    public static $n =3;
    public static $Tab_salle=[];

    public function __construct($x, $y, $name){
        //$this->nom = $nom;
    }
    public function initDonjon() {
        for($i = 1; $i <= self::$m;$i++) {
            for($j = 1; $j <= self::$n;$j++) {
                self::$Tab_salle.array_push(new Salle($i,$j));
            }
        }
    public function SelecEmpty($Tab_salle,&$Empty){
        $vide=array_rand($Tab_salle, 1);
        array_push($Empty, $vide);
    }
    public function Porte($m,$n){
        $this->porte = 0;
        for ($i = 1; $i <= ($n+$m); $i++) {
            if (self::Tab_salle['S1']['x'] < 0){
                $this->porte = 0;
            }else{
                $porte=2;
            }

        }
        if (($m -1 || $n-1) && ( $m > 0 || $n >0) ){
            $porte=3;
        }else{
            $porte=2;
        }
    }


        for($i = 1; $i <= self::m;$i++) {
            for($j = 1; $j <= self::n;$j++) {
                for ($i = 1; $i <= ($n+$m); $i++) {
                    if (self::Tab_salle['S1']['x'] < 0){
                        $this->porte = 0;
                        $this->neighbors.array_push($Tab_salle);
                    }else{
                        $porte=2;
                    }

        }
                if (($m -1 || $n-1) && ( $m > 0 || $n >0) ){
                    $porte=3;
                }else{
                    $porte=2;
                }
            }
        }
    }
}
?>