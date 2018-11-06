<?php
/**
 * Created by PhpStorm.
 * User: Daemon
 * Date: 06.11.2018
 * Time: 11:37
 */
$a = 41;
$b = 21;
$h = 31;
$c = 20;
$d = 40;
$k = 30;
echo "a = $a <br/> b = $b <br/> h = $h<br/><hr> 
c = $c <br/>d = $d<br/> k = $k<br/><br/>";
/* хотел в два столбика данные вывести, но код сильно увеличится.
 Можно так украшать или всё же придерживаемся минимализма и чистоты кода? */
if ($a >= $c && $b >= $d && $h >= $k){  //добавил type в ответ для лёгкости проверки решения
    echo "We can, yee 1 type";
}elseif ($a >= $c && $b >= $k && $h >= $d){
    echo "We can, yee 2 type";
}elseif ($a >= $d && $b >= $c && $h >= $k){
    echo "We can, yee 3 type";
}elseif ($a >= $d && $b >= $k && $h >= $c){
    echo "We can, yee 4 type";
}elseif ($a >= $k && $b >= $c && $h >= $d){
    echo "We can, yee 5 type ";
}elseif ($a >= $k && $b >= $d && $h >= $c){
    echo "We can, yee 6 type";
}
else {
    echo "bag is too small :(";
}