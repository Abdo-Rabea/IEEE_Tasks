<?php

$mix = ["A", "C", "B", 1, 100, 3, 2, 6, 5, 7];
$mix = array_filter($mix, fn ($v) => (is_int($v) && ($v % 2) != 0));
sort($mix);
print_r($mix);
// Output
// Array
// (
//   [0] => 1
//   [1] => 3
//   [2] => 5
//   [3] => 7
// )