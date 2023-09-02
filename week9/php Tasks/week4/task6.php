<?php

$a = "Elzero";
$b = "Web";
$c = "School";

// Method One
$d = "$a $b $c";

// Method Two
$d = "{$a} {$b} {$c}";

// Method Three
$d = $a . " " . $b . " " . $c;

// Method Four
$d = $a;
$d .= " ";
$d .= $b;
$d .= " ";
$d .= $c;

echo $d; // Elzero Web School