<?php

//анонимна функция, присвоенная переменной

$arr = [10,20,30,40];

$arraverage = function (array $arr){
    return array_sum($arr)/count($arr);
};

echo "Среднее массива: " . $arraverage($arr) . "</br>";

//рекурсия

function fctrl($x){
    if ($x === 0) return 1;
    return $x * fctrl($x - 1);
}

echo fctrl(3);
?>