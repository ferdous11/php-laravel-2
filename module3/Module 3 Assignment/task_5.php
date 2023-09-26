<?php
generatePassword(12);
function generatePassword($length){
    $password = "";
    $smallLetter = "abcdefghijklmnopqrstuvwxyz";//26
    $capitalLetter = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";//26
    $numerical = "0123456789";//10
    $specalCharacter = "!@#$%^&*()_+";//12
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";//74
    
    $password .= $smallLetter[rand(0, 25)];
    $password .= $capitalLetter[rand(0, 25)];
    $password .= $numerical[rand(0, 9)];
    $password .= $specalCharacter[rand(0, 11)];
    
    for($i=4;$i<$length;$i++){
        $password .= $chars[rand(0, 73)];
    }
    echo $password;
}