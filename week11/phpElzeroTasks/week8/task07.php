<?php
$names = ["Osama", "Ahmed", "Sayed", "Mahmoud", "Ali"];

next($names);
next($names);

echo current($names) . "\n"; // "Sayed"

end($names);

echo current($names) . "\n"; // "Ali"

reset($names);

echo current($names) . "\n"; // "Osama"

end($names);
prev($names);

echo current($names) . "\n"; // "Mahmoud"