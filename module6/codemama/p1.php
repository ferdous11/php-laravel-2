<?php
    fscanf(STDIN,"%d %d",$num1,$num2);
    $price = $num1-(($num1*$num2)/100);
    printf("Price: %.2f\n",$price);
?>