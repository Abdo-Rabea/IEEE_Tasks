<?php

function get_arguments(...$args)
{
    $all = "";
    foreach ($args as $v) {
        $all .= $v . " ";
    }
    return $all . "<br>";
}


function get_arguments2()
{
    $all = "";
    foreach (func_get_args() as $v) {
        $all .= $v . " ";
    }
    return $all . "<br>";
}


// Write Function Content Here

// Needed Output
echo get_arguments2("Hello", "Elzero", "Web", "School"); // Hello Elzero Web School
echo get_arguments2("I", "Love", "PHP"); // I Love PHP