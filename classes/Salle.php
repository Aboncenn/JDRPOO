<?php

Class Salle
{
    public $Empty = [];
    public $porte = 1;
    public static $m = 3;
    public static $n = 3;
    public static $Tab_salle = [];

    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->neighbors = [];
    }

    public function initDonjon($x, $y)
    {
        for ($i = 1; $i <= self::$m; $i++) {
            for ($j = 1; $j <= self::$n; $j++) {
                array_push(self::$Tab_salle, new Salle($x, $y));
            }
        }
    }
    public function SelecEmpty($Tab_salle, &$Empty)
    {
        $vide = array_rand($Tab_salle, 1);
        array_push($Empty, $vide);
    }
        public function Porte($m,$n)
        {
            $this->porte = 0;
            for ($i = 1; $i <= self::$m; $i++) {
                for ($j = 1; $j <= self::$n; $j++) {
                    for ($i = 1; $i <= ($n + $m); $i++) {
                        if (self::$Tab_salle < 0) {
                            $this->porte = 0;
                            array_push($this->neighbors,$Tab_salle);
                            if(self::$Tab_salle->x > 1  ){
                                $this->porte = 3;
                                array_push($this->neighbors,$Tab_salle);
                                if(self::$Tab_salle->y > 1  ){
                                    $this->porte =3;
                                    array_push($this->neighbors,$Tab_salle);
                                    if($this->neighbors = 1  ){
                                        $this->porte =3;
                                        array_push($this->neighbors,$Tab_salle);
                                    }
                                }
                            }
                        }
                        else {
                            $this->porte = 4;
                        }

                    }
                }
            }
        }

}
?>