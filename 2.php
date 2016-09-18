<?php
/**
 * Created by PhpStorm.
 * User: IgorPc
 * Date: 16.09.2016
 * Time: 15:19
 */


$arr = [1, 32, 24, 54, 76 ,3, 98, 22,33,46, 2, 14, 63, 72, 91, 83, 34, 42, 7, 67];
$result = 0;

foreach ($arr as $key) {
    echo $result += $key;
    echo "<br>";
}

echo "<br>";



foreach ($arr as $key) {

    echo $result *= $key;
    echo "<br>";
}


