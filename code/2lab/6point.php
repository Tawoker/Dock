<?php

// work with %

$a = 10;
$b = 3;
echo $a % $b, "\n";
if ($a % $b == 0)
    echo "$a делится на $b \n";
else
    echo "$a делится на $b с остатком \n";

// work with sqrt, pow

$st = pow(2, 10);
echo $st, "\n", sqrt(245), "\n";

$arr = array(4, 2, 5, 19, 13, 0, 10);
$x = 0;
foreach($arr as &$value){
    $x += pow($value, 2);
}
$x = sqrt($x);
echo $x, "\n";

// work with round, ceil, floor

echo round(sqrt(379), 0), "\n", round(sqrt(379), 1), "\n", round(sqrt(379), 2), "\n";
$arr_sqrt = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)),
);
echo $arr_sqrt["floor"], " ", $arr_sqrt["ceil"], "\n";

// work with min, max

$arr_values = array(4, -2, 5, 19, -130, 0, 10);
echo min($arr_values), "\n", max($arr_values), "\n";

// work with rand

echo rand(1, 100), "\n";
$arr_rand = array();
for($i = 0; $i < 10; $i++){
    $arr_rand[$i] = rand();
    echo $arr_rand[$i], " ";
}

// work with abs

$a = 339;
$b = -2022;
echo abs($a - $b), "\n";
$nonabs_arr = [1, 2, -1, -2, 3, -3];
$abs_arr = $nonabs_arr;
foreach ($abs_arr as &$value){
    $value = abs($value);
    echo "$value ";
}

// divisors

$number = 99;
$number_divisors_arr = array();
for ($i = 1; $i <= $number; $i++){
    if ($number % $i == 0){
        array_push($number_divisors_arr, $i);
        echo $i, " ";
    }
}

// more than 10

$from_one_to_ten_arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$arr_sum = 0;
for($i = 0; $i < count($from_one_to_ten_arr); $i++){
    $arr_sum += $from_one_to_ten_arr[$i];
    if ($arr_sum > 10){
        $answer = $i + 1;
        echo $answer;
        break;
    }
}