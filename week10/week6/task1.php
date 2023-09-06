<?php
function greeting($name, $gender = "")
{
    echo "Hello ";
    if ($gender == "Male")
        echo "Mr ";
    else if ($gender == "Female")
        echo "Miss ";
    echo "$name <br>";
}

// Write Function Content Here

// Needed Output
echo greeting("Osama", "Male"); // Hello Mr Osama
echo greeting("Eman", "Female"); // Hello Miss Eman
echo greeting("Sameh"); // Hello Sameh