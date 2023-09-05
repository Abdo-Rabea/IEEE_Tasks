<?php

$help_num = 4;
$nums = [2, 4, 5, 6, 10];

for ($i = 0; $i <= $help_num; $i++) {
    echo $nums[$i] . " + " . $nums[count($nums) - $i - 1] . " = " . $nums[$i] + $nums[count($nums) - $i - 1] . "<br>";
}
// Output
// "2 + 10 = 12"
// "4 + 6 = 10"
// "5 + 5 = 10"
// "6 + 4 = 10"
// "10 + 2 = 12"
