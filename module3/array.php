<?php

//Task 1:
echo "Task 1:\n";

$student =[ 'name' => 'Alice', 'age' => 22, 'grade' => 'A'];
echo $student['age']."\n";


//Task 2:
echo "\nTask 2:\n";

$student =[ 'name' => 'Alice', 'age' => 22, 'grade' => 'A'];
if(array_key_exists('grade',$student)){
    echo $student['grade']."\n";
}


//Task 3:
echo "\nTask 3:\n";

$numbers =[100, 200, 50, 40, 50];
foreach($numbers as $number){
    echo $number."\n";
}
echo $numbers[1];


//Task 4:
echo "\nTask 4:\n";

function testName($var)
  {
    if($var[0]=='M')
    return $var;
  }
$names=['Talha', 'Afnan', 'Mashrufa', 'Zia', 'Iqbal', 'Habib', 'Airin', 'Moni'];
$newArray = array_filter($names,"testName");

foreach($newArray as $name){
    echo $name."\n";
}

//Task 5:
echo "\nTask 5:\n";

$originalString = 'Hello, World!';
echo strrev($originalString);