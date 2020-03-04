<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 05.03.2020
 * Time: 3:48
 */

function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

for ($n = 1; $n <= 16; $n++) {
    echo(fibonacci($n) . ", ");
}
echo("...<br>");


$mas1 = array(1,2,3,4,5);

reset($mas1);

foreach ($mas1 as $value) {
    if ($value % 2 != 0) {
        @$value *= 3;
        echo $value . '<br />';
    }
}

for ($c = 2; $c <= 10; $c++) {
    for($i = 2; $i < $c; $i++) {
        if ($c % $i == 0) continue 2;
    }
    echo "$c ";
}