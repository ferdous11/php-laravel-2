<?php 
$filename = "input.txt";
if(is_readable($filename))  {  
    $fp = fopen($filename,"r"); 
    while($line = trim(fgets($fp))) {
            echo $line;
    
}fclose($fp);
}


if(is_writable($filename)) {
    $fp = fopen($filename,"a");
    fwrite($fp,"Ferdous3\n");
    fwrite($fp,"Ferdous3\n");
  
}
fclose($fp);
?>