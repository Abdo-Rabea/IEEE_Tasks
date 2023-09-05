<?php

$help_num = 3;
$nums = [4, 5, 6, 1, 2, 3];
$names = ["Ahmed", "Sayed", "Osama", "Mahmoud", "Gamal"];

for (; $help_num <= $nums[(int)""]; $help_num++) {
    echo $names[$nums[$help_num]] . "<br>";
}
// Output
// "Sayed"
// "Osama"