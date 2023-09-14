<?php
$nums = [5, 10, 20, 5, 30, 40];
echo array_reduce(
    array_filter($nums, fn ($v) => $v != 5),
    fn ($c, $v) => $c + $v
);

// Output
// 100