<?php
function increaseEntusiasm(string $str){
    return $str .= "!";
}
$any_string = "Lorem, ipsum dolor";
echo increaseEntusiasm($any_string);

function repeatThreeTimes(string $str){
    return $str . $str . $str;
}

echo increaseEntusiasm(repeatThreeTimes("Lorem"));

function cut(string $str, int $num = 10){
    return substr($str, 0, $num);
}

echo cut($any_string);

function recursivePrintArray(array $arr){
    if(current($arr) == false)
        return;
    echo current($arr), " ";
    next($arr);
    recursivePrintArray($arr);
}

$nums = [1, 2, 3, 4, 5, 6];
recursivePrintArray($nums);

function sumOfDigits($num){
    $sum = 0;
    while($num > 0){
        $sum += $num % 10;
        $num /= 10;
    }
    if ($sum > 9)
        return sumOfDigits($sum);
    else
        return $sum;
}

echo sumOfDigits(55);