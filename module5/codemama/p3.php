<?php
    fscanf(STDIN,"%d",$seconds);
    $hour = intdiv($seconds,3600);
    $seconds = $seconds%3600;
    $minute = intdiv($seconds,60);
    echo $hour.":".$minute."\n";
?>