<?php
$arr = array(1,1,1,2,2,3,3,1,1,2,2,3);

$result = array();
$prev_value = array('value' => null, 'amount' => null);

foreach ($arr as $val) {
    if ($prev_value['value'] != $val) {
        unset($prev_value);
        $prev_value = array('value' => $val, 'amount' => 0);
        $result[] =& $prev_value;
    }
    $prev_value['amount']++;
}

print_r($result);

