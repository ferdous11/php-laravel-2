<?php
// function functionAdd($num1,$num2){
//     return ($num1 + $num2);
// }
// function functionSubtract($num1,$num2){
//     return ($num1 - $num2);
// }
// function functionDivision($num1,$num2){
//     return ($num1 / $num2);
// }
// function functionMultipication($num1,$num2){
//     return ($num1 * $num2);
// }

// function calculetor($num1,$num2,$cb){
//     echo $cb($num1,$num2);
// }

// calculetor(3,4,"functionAdd");




function addNumbersWithCallback( $num1, $num2, $callback )
{

// Check if the callback is a valid callable function
    if ( is_callable( $callback ) ) {
        // Apply the callback function to the first number
        $num1 = $callback( $num1 );
    }

    // Add the modified first number to the second number
    $result = $num1 + $num2;

    return $result;
}

// Example callback function: Increase the number by 2
$increaseByTwo = function ( $number ) {
    return $number + 2;
};

// Example usage:
$num1 = 5;
$num2 = 10;

$result = addNumbersWithCallback( $num1, $num2, $increaseByTwo );
echo "Result: $result"; // Output: Result: 17 ((5 + 2) + 10)
