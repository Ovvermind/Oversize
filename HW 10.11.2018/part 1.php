<html>
<style>
    th{
        background-color: darkgray;
    }
    table{
        table-layout: fixed;
    }
</style>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: Daemon
 * Date: 14.11.2018
 * Time: 19:10
 */
$n=70;
$m=1;
echo'<table border="1" width="400">';
echo'<th>Число</th><th>Квадрат числа</th><th>Куб числа</th>';
for ($i = 2;$i<=$n;$i++)
{
        echo '<tr>';
        echo'<td align="center">'.$i.'</td>';
    for ($j=1;$j<=$m;$j++)
    {
        echo'<td align="center">'.$i*$i.'</td>';
        echo'<td align="center">'.$i*$i*$i.'</td>';
    }
    echo'</tr>';
}
?>