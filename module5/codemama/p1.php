<?php
    fscanf(STDIN,"%d %d",$num1,$num2);
    function fnLookForTen(int $num1,int $num2){
        if($num1==10 || $num2==10 || $num1+$num2==10)
            return true;
        else
            return false;
    }
    if(fnLookForTen($num1 , $num2))
        echo "True\n";
    else
        echo "False\n";
        
?>