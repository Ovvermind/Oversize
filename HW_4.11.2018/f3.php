<?php
/**
 * Created by PhpStorm.
 * User: Daemon
 * Date: 05.11.2018
 * Time: 18:39
 */
$a = 9;
$b = 0;
$c = 20;
$d = 18;
echo "a = $a <br/> b = $b <br/> c = $c <br/> d = $d<br/>";
if ($a > $b && $a > $c && $a > $d){
    $max = $a;
    echo "max = $max<br/>";
}elseif ($b > $a && $b > $c && $b > $d){
    $max = $b;
    echo "max = $max<br/>";
} elseif ($c > $a && $c > $b && $c > $d){
    $max = $c;
    echo "max = $max<br/>";
} elseif ($d > $a && $d > $b && $d > $c){
    $max = $d;
    echo "max = $max<br/>";
} else {
    echo "identical numbers found";
    exit;
}