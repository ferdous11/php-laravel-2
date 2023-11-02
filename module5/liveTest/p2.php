<?php
$file = "data.txt";
$data = "\nThe first civilization known to have a functional theory of the planets were the Babylonians, who lived in Mesopotamia in the first and second millennia BC.";
// Open the file in append mode
$fp = fopen($file,"a");
if( $fp ) {
    // Write the data to the file
    fwrite($fp, $data);

     // Close the file
     fclose($fp);
}
else {
    echo "Failed to open the file for append mode";
}