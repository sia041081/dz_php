<?php
function average($arr)
{
    $sum = 0;
    foreach ($arr as $elem)
        $sum += $elem;
    $avr = $sum / 2;
    return $avr;
}

$arr_r = [1, 2, 5, 100, 25, 33, 77];
echo 'Среднее арифметическое = ' . ' ' . average($arr_r) . '<br>';
$avr_r = average($arr_r);
foreach ($arr_r as $key => $value)
    if ($value < $avr_r)
        echo $value . '<br>';