<?php


$handle = fopen("elzero.txt", "r");
echo fgets($handle);
echo fgets($handle);
echo "<br>";
rewind($handle);
echo fread($handle, 24);
fclose($handle);

echo "<br>";
$elzero_file = file("elzero.txt");
echo $elzero_file[0] . " " . $elzero_file[1];
echo "<br>";

echo file_get_contents("elzero.txt", false, null, 0, 24);

// Hello Elzero Web School
// Hello Elzero Web School
// Hello Elzero Web School
// Hello Elzero Web School