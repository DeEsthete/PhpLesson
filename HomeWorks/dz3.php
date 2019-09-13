<?php
function Shift(array &$arr, int $n)
{
    $n = $n % count($arr);
    for ($i = 0; $i < $n; $i++) {
        $x = $arr[0];
        for ($j = 1; $j < count($arr); $j++) {
            $arr[$j - 1] = $arr[$j];
        }
        $arr[count($arr) - 1] = $x;
    }
}

$arr = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
Shift($arr, 1);
var_dump($arr);