<?php

Class Salle
{
    public static $Empty = [];
    public static $m = 3;
    public static $n = 3;
    public static $Tab_salle = [];
    public $coffres;

    private function __construct($x, $y)
   {
        $this->x = $x;
        $this->y = $y;
        $this->neighbors = [];
        $this->coffres = [];
   }

    public static function initDonjon()
    {
        for ($i = 1; $i <= self::$m; $i++) {
            for ($j = 1; $j <= self::$n; $j++) {
                self::$Tab_salle[$i][$j] = new Salle($i, $j);
            }
        }
    }
    public static function SelecEmpty()
    {
        for ($i = 0; $i < 3;$i++){
            $randx = 1;
            $randy = 1;
            while($randx == 1 && $randy == 1) {
                $randx = rand(1, self::$m);
                $randy = rand(1, self::$n);
            }

            array_push(self::$Empty, self::$Tab_salle[$randx][$randy]);
        }
    }

    public static function isEmpty($salle) {
        foreach(self::$Empty as $empty) {
            if($salle == $empty)
                return true;
        }

        return false;
    }

    public static function Porte()
    {
        for ($i = 1; $i <= self::$m; $i++) {
            for ($j = 1; $j <= self::$n; $j++) {
                for ($i = 1; $i <= (self::$n + self::$m); $i++) {
                    if (isset(self::$Tab_salle[$i][$j]) && !self::isEmpty(self::$Tab_salle[$i][$j])) {
                        $sallecourante = self::$Tab_salle[$i][$j];

                        $sallecourante->porte = 0;

                        if($sallecourante->x > 1 && !self::isEmpty(self::$Tab_salle[$i-1][$j])) {
                            array_push($sallecourante->neighbors, self::$Tab_salle[$i-1][$j]);
                        }

                        if($sallecourante->y > 1 && !self::isEmpty(self::$Tab_salle[$i][$j-1])) {
                            array_push($sallecourante->neighbors, self::$Tab_salle[$i][$j-1]);
                        }

                        if($sallecourante->x < self::$m && !self::isEmpty(self::$Tab_salle[$i+1][$j])) {
                            array_push($sallecourante->neighbors, self::$Tab_salle[$i+1][$j]);
                        }

                        if($sallecourante->y < self::$n && !self::isEmpty(self::$Tab_salle[$i][$j+1])) {
                            array_push($sallecourante->neighbors, self::$Tab_salle[$i][$j+1]);
                        }

                        foreach($sallecourante->neighbors as $neighbor) {
                            if(self::isEmpty($neighbor) && $sallecourante->porte > 0){
                                $sallecourante->porte--;
                            }
                        }
                    }
                }
            }
        }
    }

    public function Coffre(){
        $nombrecoffre = rand(0,2);
        for ($i = 0;$i < $nombrecoffre; $i++){
            array_push($this->coffres, new Coffre());
        }
    }

}
?>