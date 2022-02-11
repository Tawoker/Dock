<?php


function arrayFillXXX($size){
    $arr = [];
    for($i = 1; $i <= $size; $i++){
        array_push($arr, str_repeat('x', $i));
        echo $arr[$i-1], " ";
    }
    return $arr;
}

function arrayFill($value, $size){
    $arr = [];
    for($i = 1; $i <= $size; $i++){
        array_push($arr, $value);
        echo $arr[$i-1], " ";
    }
    return $arr;
}
arrayFill("XXX", 4);

$two_dim_arr = [[1, 2, 3], [4, 5], [6]];
$sum_tdarr = 0;
for ($i = 0; $i < count($two_dim_arr); $i++){
    $sum_tdarr += array_sum($two_dim_arr[$i]);
}
echo $sum_tdarr;

$arr = array();
for($i = 0; $i < 3; $i++){
    $sub_arr = [];
    for($j = 0; $j < 3; $j++){
        array_push($sub_arr, $i * 3 + $j + 1);
    }
    array_push($arr, $sub_arr);
}

//var_dump($arr);

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;

$user = array(
    'name' => 'Yara',
    'surname' => 'Slave',
    'patronymic' => 'Neo'
);
echo $user['surname'], " ", $user['name'], " ", $user['patronymic'];

$date = array(
    'year' => '2022',
    'month' => '02',
    'day' => '11'
);
echo $date['year'], ".", $date['month'], ".", $date['day'], "\n";

$arr = ['a', 'b', 'c', 'd', 'e'];
echo count($arr), "\n";
end($arr);
echo current($arr), "\n";
prev($arr);
echo current($arr), "\n";