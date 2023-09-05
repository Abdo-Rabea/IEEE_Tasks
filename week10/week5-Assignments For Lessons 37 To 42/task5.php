<?php
$start = 0;
$mix = [1, 2, 3, "A", "B", "C", 4];

foreach ($mix as $value) {
    if ($value == $mix[$start])
        continue;
    if (is_int($value))
        echo "$value<br>";
}

// Output
// 2
// 3
// 4