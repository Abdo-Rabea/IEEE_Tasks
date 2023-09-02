<?php

$a = "10";
echo +$a;
echo gettype(+$a);
echo '<br>';

echo (int)$a;
echo gettype(+$a);
echo '<br>';

echo (integer)$a;
echo gettype((integer)$a);
echo '<br>';

echo intval($a);
echo gettype(intval($a));
echo '<br>';

echo $a * 1;
echo gettype($a * 1);
echo '<br>';
