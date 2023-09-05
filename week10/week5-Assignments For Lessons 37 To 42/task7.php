<?php
$mix = [1, 2, "A", "B", "C", 3, 4];
$nNubmers = 0;
$nIgnored = 0;
foreach ($mix as $value) {
    if (is_int($value)) {
        echo "$value<br>";
        $nNubmers++;
    } else $nIgnored++;
}
echo "$nNubmers Numbers Printed<br>";
echo "$nIgnored Letters Ignored";

// Output
// 1
// 2
// 3
// 4
// "4 Numbers Printed"
// "3 Letters Ignored"