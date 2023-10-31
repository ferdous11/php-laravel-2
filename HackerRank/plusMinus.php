<?php

/*
 * Complete the 'plusMinus' function below.
 *
 * The function accepts INTEGER_ARRAY arr as parameter.
 */

function plusMinus($arr,$num) {
    $n=0;$p=0;$o=0;
    foreach($arr as $a)
    {
        if($a>0)
        $p++;
        elseif($a<0)
        $n++;
        else
        $o++;
    }
    printf("%.6f\n%.6f\n%.6f\n",$p/$num,$n/$num,$o/$num);
}

$num = intval(trim(fgets(STDIN)));

$arr_temp = rtrim(fgets(STDIN));

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));

plusMinus($arr,$num);
