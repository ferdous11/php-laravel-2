<?php
function recursion($n){
    if($n==0)
    return 0;
    elseif($n==1)
    return 1;
    else return (recursion($n-1) + recursion($n-2));
}
echo  recursion(10);