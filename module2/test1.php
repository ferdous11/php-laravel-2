<?php 
// echo "1.\n";
// for($i=2;$i<=10;$i+=2){
//     if($i==10)
//         echo $i;
//     else
//         echo $i.", ";
// }

// echo "\n2.\n";
// function functionGreet($name){
//     echo "Hi, ".$name."!";
// }

// functionGreet("Ferdous");

// echo "\n3.\n";
// function functionFactorial($n){
//     if($n==0)
//         return 1;
//     return ($n * functionFactorial($n-1));
// }

// echo functionFactorial(4);

// echo "\n4.\n";
// function functionNThFibonacci($n){
//     if($n==0)
//         return 0;
//     elseif($n==1)
//         return 1;
//     else 
//         return (functionNThFibonacci($n-1) + functionNThFibonacci($n-2));
// }

// $nThNumber = 10; //set the series number

// for($i= 0; $i<$nThNumber;$i++){
//     if($i==$nThNumber-1)
//         echo functionNThFibonacci($i);
//     else
//         echo functionNThFibonacci($i).", ";
// }


// (function(){
//     echo "ferdous";
// })();

// function sum(...$numbers){
//    echo array_sum($numbers);
// }

// sum(1,2,3,4,6,7);

$sum = fn($nam1, $nam2)=>($nam1 * $nam2);
echo $sum(2,3);