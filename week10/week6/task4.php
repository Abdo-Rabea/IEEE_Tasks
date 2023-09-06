<?php

// Write Function Content Here
function multiply(...$nums)
{
    $m = 1;
    foreach ($nums as $n) {
        if (!is_string($n))
            $m *= (int)$n;
    }
    return $m;
}
// Needed Output
echo multiply(10, 20); // 200
echo multiply("A", 10, 30); // 300
echo multiply(100.5, 10, "B"); // 1000