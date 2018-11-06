<?php
/**
 * Created by PhpStorm.
 * User: Daemon
 * Date: 05.11.2018
 * Time: 18:39
 */
$a = 9;
$b = 3;
$c = 12;
echo "a = $a <br/> b = $b <br/> c = $c <br/>";
if ($a < $b && $a < $c){
    $min = $a;
    echo "min = $min<br/>";
}elseif ($b < $a && $b < $c){
    $min = $b;
    echo "min = $min<br/>";
} elseif ($c < $a && $c < $b){
    $min = $c;
    echo "min = $min<br/>";
} else {
    echo "identical numbers found";
    exit;
}
if ($a > $b && $a > $c){
    $max = $a;
    echo "max = $max<br/>";
}elseif ($c > $a && $c > $b){
    $max = $c;
    echo "max = $max<br/>";
} elseif ($b > $a && $b > $c){
    $max = $b;
    echo "max = $max<br/>";
} else {
    echo "identical numbers found";
    exit;
}
$sum = $min + $max;
echo "summa = $sum";


