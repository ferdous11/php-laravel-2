<?php
fscanf(STDIN,"%s",$str);
$l = strlen($str);
$find=array();
$result="";
for($i=0;$i<$l;$i++){
    if(!array_key_exists($str[$i],$find)){
        $find[$str[$i]]=1;
        $result.=$str[$i];
    }
}
print_r($result);