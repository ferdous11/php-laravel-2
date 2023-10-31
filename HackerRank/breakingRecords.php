<?php

/*
 * Complete the 'breakingRecords' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts INTEGER_ARRAY scores as parameter.
 */

function breakingRecords($scores,$n) {
    $max = $min = $scores[0];
    $cma = $cmi = 0;
    for($i = 1; $i < $n; $i++){
        if($scores[$i]<$min){
            $min = $scores[$i];
            $cmi++;
        }
        elseif($scores[$i]>$max){
            $max = $scores[$i];
            $cma++;
        }
    }
    $arr[0]=$cma;
    $arr[1]=$cmi;
    
    return $arr;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$scores_temp = rtrim(fgets(STDIN));

$scores = array_map('intval', preg_split('/ /', $scores_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = breakingRecords($scores,$n);

fwrite($fptr, implode(" ", $result) . "\n");

fclose($fptr);
