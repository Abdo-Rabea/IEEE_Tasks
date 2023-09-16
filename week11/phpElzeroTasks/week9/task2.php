<?php

$friends = ["Osama", "Ahmed", "Sayed", "Ibrahim"];

echo $friends[array_rand($friends)] . "\n";
echo $friends[rand(0, count($friends) - 1)];
// Example
// Ibrahim
// Ahmed