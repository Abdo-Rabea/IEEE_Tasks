<?php


$nums = [10, 100, -20, 50, 30];


// assume array is not empty
function my_array_max(array $arr): int
{
    $mn = $arr[0];
    foreach ($arr as $v) {
        $mn = $v < $mn ? $v : $mn;
    }
    return $mn;
}

echo my_array_max($nums);

// Output
// -20