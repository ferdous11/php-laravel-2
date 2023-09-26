<?php 
$numbers= [1,2,3,4,5,6,7,8,9,10];

functionDelEvenNumber($numbers);

function functionDelEvenNumber($numbers2){
    $l = count($numbers2);
    for($i=0;$i<$l;$i++){
        if($numbers2[$i]%2==0)
        unset($numbers2[$i]);
    }
    print_r($numbers2);
}

