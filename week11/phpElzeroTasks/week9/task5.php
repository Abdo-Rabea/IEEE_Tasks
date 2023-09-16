<?php

$urls = ["http://www.elz ero.org", "http://¥elzero.org", "https://elzero.org", "https://elzero.o¥rg"];

foreach ($urls as $url) {
    if (filter_var($url, FILTER_VALIDATE_URL))
        echo "A Valid URL\n";
    else
        echo "Not A Valid URL\n";
}
// Output
// "Not A Valid URL"
// "Not A Valid URL"
// "A Valid URL"
// "Not A Valid URL"
