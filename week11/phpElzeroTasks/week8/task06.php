<?php
$chars = ["A", "B", "C", "D", "E"];
$char = "@@";
$zero = 0;
print_r(array_pad($chars, count($chars) * strlen($char), $char[$zero]));
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
//   [4] => E
//   [5] => @
//   [6] => @
//   [7] => @
//   [8] => @
//   [9] => @
// )
