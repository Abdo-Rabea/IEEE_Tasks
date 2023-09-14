<?php
$chars = ["A", "B", "C"];
// 6 methods
$chars[] = "D";
$chars[count($chars)] = "D";
array_push($chars, "D");

$chars = array_merge($chars, ["D"]);
array_splice($chars, count($chars), 0, "D");
$chars = array_pad($chars, count($chars) + 1, "D");

print_r($chars);
// Output
// Array
// (
//   [0] => A
//   [1] => B
//   [2] => C
//   [3] => D
// )