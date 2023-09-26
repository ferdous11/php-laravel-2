<?php
generatePassword(15);
function generatePassword($length){
    $password = "";
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    $count = mb_strlen($chars)-1;
    for($i=0;$i<$length;$i++){
        $password .= $chars[rand(0, $count)];
    }
    echo $password;
}