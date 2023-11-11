<?php
    fscanf(STDIN,"%s %s",$str,$key);
    $sl= strlen($str); //main string length
    $kl= strlen($key); //key string length
    $r=0;

    for($i=0;$i<$sl;$i++){
        if($str[$i]==$key[0]){
          
            for($j=1;$j<$kl;$j++){
                $i++;
                if($str[$i]!=$key[$j])
                break;
            }
            if($j==$kl)
            $r++; 
        }
    }

    echo $r."\n";
    
?>