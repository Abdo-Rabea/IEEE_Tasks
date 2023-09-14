<?php


$chars = ["o", "r", "e", "z", "l", "E"];

$out = "";
foreach ($chars as $v)
    $out = $v . $out;

echo $out;
// Output
// "Elzero"