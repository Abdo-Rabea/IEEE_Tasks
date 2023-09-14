<?php
$nums = [10, 20, 30];

echo array_reduce($nums, fn ($c, $n) => $c + $n);
echo "\n";

echo array_sum($nums);
// Output
// 60
// 60