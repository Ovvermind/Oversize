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
for ($i=1;$i<=$n;$i++){
    $k[i] = $k[i] + 1;
}
for ($t=1;$t<=m;$t++) {
    if ($t & 1) {
        echo '<tr>';
    }else {
        echo '<tr class="b1">';
    }
    for ($i=1;$i<=5;$i++) {
            echo '<td align="center">' . $k[s] . '</td>';
            $s = $s+4;
    }
    echo '</tr>';
    $s++;
}
?>