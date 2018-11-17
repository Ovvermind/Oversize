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
$ch=0;
$n=48; //максимальное число
$m= ceil ($n/5); //число столбцов, округлённое в >
echo'<table border="1" width="200">';
for ($i=1;$i<=$m;$i++) {
    if ($i & 1) {
        echo '<tr>';
        for ($j = 1; $j <= 5; $j++) {
            $k[i] = $k[i] + 1;
            echo '<td align="center">' . $k[i] . '</td>';
            $ch++;
            if ($ch>=$n) {
                if ($j <= 5) {
                    for ($jj = $j+1; $jj <= 5; $jj++) {
                        echo '<td></td>';
                    }
                    echo '</tr>';
                    exit;
                }
            }
        }
        echo '</tr>';
    } else {
        echo '<tr class="b1">';
        for ($j = 1; $j <= 5; $j++) {
            $k[i] = $k[i] + 1;
            echo '<td align="center">' . $k[i] . '</td>';
            $ch++;
            if ($ch>=$n){
                if ($j<=5)
                {
                    for ($jj = $j+1; $jj <= 5; $jj++) {
                        echo '<td></td>';
                    }
                }
                echo '</tr>';
                exit;
            }
        }
        echo '</tr>';
    }
}
?>