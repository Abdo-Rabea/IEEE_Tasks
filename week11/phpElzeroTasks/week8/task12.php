<?php


$nums = [11, 2, 10, 7, 20, 50];

function my_array_sum(array $arr): int
{
    $sum = 0;
    while (current($arr)) {
        $sum += current($arr);
        next($arr);
    }
    return $sum;
}

echo my_array_sum($nums);

// Output
// 100