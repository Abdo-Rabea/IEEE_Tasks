<?php

$nums = [1, 2, 3, 4, 5, 6];

// Output
// Every Time The Array Elements Will Be Shuffled
function my_unefficient_shuffle(array $arr): array
{
    $ret = [];
    while ($arr) {
        $ret[] = array_splice($arr, array_rand($arr), 1)[0];
    }
    return $ret;
}

print_r(my_unefficient_shuffle($nums));
print_r(my_unefficient_shuffle($nums));
print_r(my_unefficient_shuffle($nums));
// my output
// Array
// (
//     [0] => 1
//     [1] => 5
//     [2] => 3
//     [3] => 6
//     [4] => 2
//     [5] => 4
// )
// Array
// (
//     [0] => 4
//     [1] => 5
//     [2] => 1
//     [3] => 2
//     [4] => 6
//     [5] => 3
// )
// Array
// (
//     [0] => 6
//     [1] => 5
//     [2] => 3
//     [3] => 4
//     [4] => 1
//     [5] => 2
// )
// Example 1
// Array
// (
//   [0] => 5
//   [1] => 1
//   [2] => 6
//   [3] => 2
//   [4] => 4
//   [5] => 3
// )

// // Example 2
// Array
// (
//   [0] => 4
//   [1] => 3
//   [2] => 6
//   [3] => 1
//   [4] => 5
//   [5] => 2
// )