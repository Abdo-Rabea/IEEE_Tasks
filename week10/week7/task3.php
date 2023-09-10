<?php
$str = 'aAa';
$num = 3;
$char = "_";

echo str_repeat(chunk_split(strtolower($str), $num, "_"), $num);
echo "<br>";
echo str_repeat(strtolower($str) . $char, $num);
// aaa_aaa_aaa_
// aaa_aaa_aaa_
