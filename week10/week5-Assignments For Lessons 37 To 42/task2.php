
<?php
$index = 0;
$index += 2;
for (; $index <= 20; $index += 2)
    echo "$index<br>";

$index = 2;
while ($index <= 20) {
    echo "$index<br>";
    $index += 2;
}

$index = 2;
do {
    echo "$index<br>";
    $index += 2;
} while ($index <= 20);


// Needed Output
// 2
// 4
// 6
// 8
// 10
// 12
// 14
// 16
// 18
// 20