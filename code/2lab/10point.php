<?php
function sumBiggerThanTen(int $x, int $y){
    if (($x + $y) > 10)
        return true;
    else
        return false;    
}

function equalNumbers(int $x, int $y){
    if ($x == $y)
        return true;
    else
        return false;   
}

$test = 0;
if (!$test) echo 'верно ';

$age = 55;
if($age < 10 or $age > 99)
    echo "Возраст не попадает в диапазон";
else{
    $sum = 0;
    while ($age > 0){
        $sum += $age % 10;
        $age /= 10;
    }
    if ($sum < 10)
        echo "Сумма цифр однозначна\n";
    else
        echo "Сумма цифр двузначна\n";
}
$arr = [12, 2, 3,];
if (count($arr) == 3)
    echo array_sum($arr);