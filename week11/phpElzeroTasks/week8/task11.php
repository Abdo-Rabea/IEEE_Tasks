<?php

// O(n) but count => O(1)
// can also be done using foreach
$arr = ["A", "B", "C", "D", "E"];

function array_size(array $arr): int
{
    $sz = 0;
    while (current($arr)) {
        $sz++;
        next($arr);
    }
    return $sz;
}

echo array_size($arr);
