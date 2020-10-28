<?php
$arr = [12, 45, 15, 78, 48, 77, 89];
$max = null;

foreach ($arr as $v) {
    if ($v > $max && $v % 2 == 0)
        $max = $v;
}
echo($max);