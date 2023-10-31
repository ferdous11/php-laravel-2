<?php

/*
 * Complete the 'miniMaxSum' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function miniMaxSum($arr) {
    $arrSum = array_sum($arr);
    $arrMax = max($arr);
    $arrMin = min($arr);
    echo $arrSum-$arrMax." ".$arrSum-$arrMin."\n";
}

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

miniMaxSum($arr);
