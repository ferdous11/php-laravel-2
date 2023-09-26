<?php
$text = "The quick brown fox jumps over the lazy dog.";
FunctionTextConveter($text);

function FunctionTextConveter($text){
    $text2 = strtolower($text);
    echo str_replace("brown","red",$text2);
}