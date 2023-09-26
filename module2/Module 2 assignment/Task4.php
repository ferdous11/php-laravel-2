<?php
// Task 4: Fibonacci Series printing using a Function

function printFibonacciSeries($length){

    if($length==1)
        return "0.";
    elseif($length==2)
        return "0, 2.";
    else{
        
        $firstNumber = 0;
        $secondNumber = 1;

        $str ="0, 1";

        for($i=1;$i<$length-1;$i++){
            $temp = $firstNumber + $secondNumber;
            $firstNumber = $secondNumber;
            $secondNumber = $temp;

            $str .=", ".$temp;
        }
        return $str.".";
    }
}
echo printFibonacciSeries(15);