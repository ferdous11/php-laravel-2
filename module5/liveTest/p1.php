<?php
$file = "data.txt";
// Open the file
$fp = fopen($file,"r");
if( $fp ) {
    // Read the content of the file
    $content = fread($fp, filesize($file));

     // Close the file
     fclose($fp);

     // Display the content
    echo nl2br($content);
}
else {
    echo "Failed to open the file.";
}