<?php
$arr = array(5, 10, 18, 4, 0, 15, 7, -7, 13, 1);

for ($i = 0, $sum = 0; $i < 10; $i++)
    if ($arr[$i] > 0 && $arr[$i] % 2 == 0)
        $sum += $arr[$i];

echo $sum;

