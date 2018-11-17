<HTML>
<style>
    .b1 {
        background-color: dimgray;
    }
    table{
        table-layout: fixed;
    }
</style>
</HTML>
<?php
/**
 * Created by PhpStorm.
 * User: Daemon
 * Date: 15.11.2018
 * Time: 18:56
 */
$s=1;//счётчик номера строки
$ch=0;
$n=17; //максимальное число
$m= ceil ($n/5); //число строк, округлённое в >
echo'<table border="1" width="200">';
for ($i=0;$i<=$n;$i++){
    $c = $i + 1;
for ($j=0;$j<=$m;$j++) {
    if ($c<=$max) {
        echo $c;
        $c+=$s;
    }else {
        echo '<td></td>';
    }
}*/осталось дописать добавление пустых тдшек Nстроки + Nстолбца*Nстрок - вычисляем любой элемент таблицы
}
?>
