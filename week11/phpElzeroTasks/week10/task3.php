<?php

// mkdir("Programming/PHP", 0711, true);

if (file_exists("Programming/PHP")) {
    rmdir("Programming/PHP");
    echo "Directory Programming/PHP Removed\n";
    rmdir("Programming");
    echo "Directory Programming Removed";
}
