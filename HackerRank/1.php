<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
while($line = rtrim(fgets($_fp))){
    $arr = explode(";",$line);
    if($arr[0] == "C"){
        $arr1 = explode(" ",$arr[2]); //jekane jekhane space ase sekhane array hisbe niye nilam
        $n = count($arr1); 
        $str = $arr1[0];
        for($i = 1; $i < $n ; $i++){
            if($arr1[$i][0]>='a' && $arr1[$i][0]<='z'){
                $arr1[$i][0] = chr(ord($arr1[$i][0])-32);
            }
        $str = $str.$arr1[$i];   
        }
        if($arr[1] == "M"){
            $str = $str."()";  
        }else if($arr[1] == "C"){  
            if($str[0]>='a' && $str[0]<='z'){
                $str[0] = chr(ord($str[0])-32);
            }
        }
        echo $str."\n";
    }else if($arr[0] == "S"){
        //$pieces = preg_split('/(?=[A-Z])/',$arr[1]);
        $str = $arr[2];
        $n = strlen($str);
        if($str[0]>='A'&& $str[0]<='Z')
            $str[0] = chr(ord($str[0])+32);
        for($i=1;$i<$n;$i++){
           if($str[$i]>='A'&& $str[$i]<='Z'){
                $str = substr_replace($str, " ", $i, 0);
                $str[++$i] = chr(ord($str[$i])+32);
                ++$i;++$n;
           } 
        }
        if($arr[1] == "M"){
            $str = str_replace("()","",$str);
        }else if($arr[1] == "C"){  

        }else if($arr[1] == "V"){   
            
        }
        echo $str."\n";
    }
}

?>

