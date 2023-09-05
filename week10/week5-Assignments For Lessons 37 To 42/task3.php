
<?php
$num = 2;
while ($num < 520) {
    if ($num == 2)
        $num--;
    echo "$num<br>";
    $num = $num * 2 + 2;
}

// Needed Output
// 1
// 4
// 10
// 22
// 46
// 94
// 190
// 382