<?php
//Task 2: Skip Multiples of 5

echo 1;
for($i=2;$i<=50;$i++){
    if($i%5==0)
        continue;
    echo ", ".$i;
}
echo ".";
