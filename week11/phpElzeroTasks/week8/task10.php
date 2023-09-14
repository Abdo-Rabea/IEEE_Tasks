<?php
// can be solved using splice to remove but you will write numbers
$mix = [1, 2, 3, "A", "B", "C", 7, 8, 9];
$nums = [4, 5, 6];

$mix = array_filter($mix, fn ($v) => is_int($v));
array_push($mix, ...$nums);
sort($mix);
// Write Your Code Here

print_r($mix);

// Output
// Array
// (
//   [0] => 1
//   [1] => 2
//   [2] => 3
//   [3] => 4
//   [4] => 5
//   [5] => 6
//   [6] => 7
//   [7] => 8
//   [8] => 9
// )