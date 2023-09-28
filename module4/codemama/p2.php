<?php

    $str1 = fgets(STDIN);
    $str2 = fgets(STDIN);
    $arr= array();
    $flag = 1;
    $l1 = strlen($str1);
    $l2 = strlen($str2);

    if($l1 == $l2){

        for($i=0;$i<$l1;$i++){
            if(!array_key_exists($str1[$i],$arr))
                $arr[$str1[$i]]=1;
            else
                $arr[$str1[$i]]++;
        }
    
        for($i=0;$i<$l1;$i++){
            if(!array_key_exists($str2[$i],$arr)){
                echo "NO";
                $flag = 0;
                break;
            }else if ($arr[$str2[$i]]!=0)
                $arr[$str2[$i]]--;
            else{
                echo "NO";
                $flag = 0;
                break;
            }
        }

        if($flag==1){
            if(array_sum($arr)==0)
                echo "YES";
            else
                echo "NO";
        }
    }else
    echo "NO";