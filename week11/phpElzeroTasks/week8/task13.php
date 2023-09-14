<?php


$nums = [10, 100, -20, 50, 30];

// assume array is not empty
function my_array_max(array $arr): int
{
    $mx = $arr[0];
    foreach ($arr as $v) {
        $mx = $v > $mx ? $v : $mx;
    }
    return $mx;
}

echo my_array_max($nums);

// Output
// 100