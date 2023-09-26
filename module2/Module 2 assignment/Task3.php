<?php 
// Task 3: Break on Condition

$firstNumber = 0;
$secondNumber = 1;

echo "0, 1";

for($i=1;$i<9;$i++){
    $temp = $firstNumber + $secondNumber;
    $firstNumber = $secondNumber;
    $secondNumber = $temp;

    echo ", ".$temp;

    if($temp>100)
        break;
}