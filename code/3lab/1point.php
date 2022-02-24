<?php

function printArr($result_arr){ // для проверки
    foreach($result_arr as &$value)
        echo $value, "<br>";
}

// 1 task
$regex = "/a.{2}b/";
$str = 'a2whb acb aeb aeeb adcb axeb';
preg_match_all($regex, $str, $matches);
printArr($matches[0]);
//

// 2 task
$str1 = "a1b2c3";
$regex1 = "/[0-9]/";
function pow3($num){
    return pow($num[0], 3);
}
echo preg_replace_callback($regex1, "pow3", $str1);