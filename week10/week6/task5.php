<?php

function check_type($a, $b, $c, $func)
{
    return $func($a) ? $a : ($func($b) ? $b : $c);
}

function check_status($a, $b, $c)
{
    $name = check_type($a, $b, $c, "is_string");
    $age = check_type($a, $b, $c, "is_int");
    $status = check_type($a, $b, $c, "is_bool");
    return "Hello " . $name . ", Your Age Is " . $age . ", Your Are " . ($status ? "" : "Not ") . "Available For Hire<br>";
}

// Needed Output
echo check_status("Osama", 38, true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(38, "Osama", true); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(true, 38, "Osama"); // "Hello Osama, Your Age Is 38, You Are Available For Hire"
echo check_status(false, "Osama", 38);// "Hello Osama, Your Age Is 38, You Are Not Available For Hire"
                                      //  Hello Osama, Your Age Is 38, Your Are Available For Hire
                                      //  Hello Osama, Your Age Is 38, Your Are Available For Hire
                                      //  Hello Osama, Your Age Is 38, Your Are Available For Hire
                                      //  Hello Osama, Your Age Is 38, Your Are Not Available For Hire