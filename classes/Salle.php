<?php
$y = range(1, 9);
$x = range(1, 9);
$Y = range(-1, 1);
$X = range(-1, 1);
$valeurs = array_fill(1, 9, 0);
function array_random($valeurs, $num = 1) {
    shuffle($valeurs);
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $valeurs[$i];
    }
    return $num == 1 ? $r[0] : $r;
}
function array_go($valeurs, $num = 1) {
    $rand= rand(-1,1);
    shuffle($valeurs);
    $r = array();
    for ($i = 0; $i < $num; $i++) {
        $r[] = $valeurs[$i];
    }
    return $num == 1 ? $r[0] : $r + $rand;
}

print_r(array_go($X));
print_r(array_random($x));
print_r(array_random($y));
?>