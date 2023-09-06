<?php

$greet = function () {
    return "Greetings";
};
$greet2 = fn () =>  "Greetings";
// Needed Output
echo $greet2("Osama"); // Greetings