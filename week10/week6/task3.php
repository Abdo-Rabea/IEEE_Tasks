<?php

function sum_all(...$nums)
{
    $total = 0;
    foreach ($nums as $n) {
        if ($n == 5)
            continue;
        else if ($n == 10)
            $n += 10;
        $total += $n;
    }
    return $total;
}


// Needed Output
echo sum_all(10, 12, 5, 6, 6, 10); // 64
echo sum_all(5, 10, 5, 10); // 40