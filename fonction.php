<?php
$attaque = 100;
$critique = 0;
 function critique($atk){
    $stat=rand(1,100);
    if($stat < 5){
        return $critique= $atk*1.5;
    }else{
        return $critique=0;
    }
}
print_r(critique($attaque));
var_dump($critique);

?>
