<?php
$chars = ["E", 1, 2, "l", "z", "E", "R", "o"];
$elzero = "";
foreach ($chars as $ch) {
  if (is_int($ch))
    continue;
  $elzero .= $ch;
}
echo ucfirst(strtolower($elzero));
// Output
// "Elzero"
//  Elzero

// you can also use ord($ch);