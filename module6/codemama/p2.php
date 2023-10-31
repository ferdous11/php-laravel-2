<?php
    fscanf(STDIN,"%d %d %d",$wheels,$body,$people);
    $cars = $body;
    if(($cars*4) > $wheels)
        $cars = (int) ($wheels/4);
    if(($cars*2) > $people)
        $cars = (int) ($people/2);
    echo $cars."\n";
?>