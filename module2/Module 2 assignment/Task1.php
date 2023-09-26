<?php
//Task 1: Looping with Increment using a Function
function functionEvenNumber($start,$end,$step){
    
    // for loop----------->
    echo "Even Number Using For Loop: ";
    for($i=$start;$i<=$end;$i+=$step){
        if($i+1==20)
            echo ($i+1).".";
        else
            echo ($i+1).", ";
    }

    // while loop----------->
    echo "\nEven Number Using While Loop: ";
    $i = $start;
    while($i<=$end){
        if($i+1==20)
            echo ($i+1).".";
        else
            echo ($i+1).", ";

        $i+=$step;
    }

    // do while loop--------->
    echo "\nEven Number Using Do-While Loop: ";
    $i = $start;
    do{
        if($i+1==20)
            echo ($i+1).".";
        else
            echo ($i+1).", ";

        $i+=$step;

    }while($i<=$end);

}
functionEvenNumber(1,20,2);