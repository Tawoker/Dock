<?php
$arr = [1, 2, 3, 4, 5, 6, 7];
echo array_sum($arr)/count($arr), "\n";

$arr = range(1, 100, 1);
echo array_sum($arr), "\n";


function recursiveSqrtArray(array $init_arr, array &$result_arr){
    if(current($init_arr) == false)
        return;
    $value = sqrt(current($init_arr));
    array_push($result_arr, $value);
    next($result_arr);
    next($init_arr);
    recursiveSqrtArray($init_arr, $result_arr);
}
$arr = [4, 9, 25, 64, 100];
$result_arr = [];
recursiveSqrtArray($arr, $result_arr);
//printArr($result_arr);
function printArr($result_arr){ // для проверки
    foreach($result_arr as &$value)
        echo $value, " ";
}

$keys_and_numbers_arr = array_combine(range('a','z'), range(1, 26));
//printArr($keys_and_numbers_arr);

$str_nums = '1234567890';
function toInt(string $str){
    return intval($str);
}
$arr = str_split($str_nums, 2);
$result_arr = array_map('toInt', $arr);
echo array_sum($result_arr);
//printArr($result_arr);
//var_dump($result_arr);