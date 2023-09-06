<?php
// Write Function Content Here
function calculate($n1, $n2, $op = "a")
{
    switch ($op) {
        case "add":
        case "a":
            return $n1 + $n2;
        case "s":
        case "subtract":
            return $n1 - $n2;
        case "m":
        case "multiply":
            return $n1 * $n2;
        default:
            return "there is no sush operation";
    }
}

// Needed Output
echo calculate(10, 20); // 30
echo "<br>";
echo calculate(10, 20, "a"); // 30
echo "<br>";
echo calculate(10, 20, "s"); // -10
echo "<br>";
echo calculate(10, 20, "subtract"); // -10
echo "<br>";
echo calculate(10, 20, "multiply"); // 200
echo "<br>";
echo calculate(10, 20, "m"); // 200