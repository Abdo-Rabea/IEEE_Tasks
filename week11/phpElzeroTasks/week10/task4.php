<?php


function change_permissions(string $file)
{
    if (is_file($file)) {
        if (pathinfo($file, PATHINFO_EXTENSION) == "txt") {
            if (chmod($file, 0700))
                echo "Permissions Changed\n";
            else
                echo "Permissions not Changed\n";
        } else
            echo "File Extension Is Not Txt\n";
    } else {
        echo "This Is Directory And Only Files Allowed\n";
    }
}

// Test Cases
echo change_permissions("Elzero"); // This Is Directory And Only Files Allowed
echo change_permissions("Work.docx"); // File Extension Is Not Txt
echo change_permissions("Result.txt"); // Permissions Changed