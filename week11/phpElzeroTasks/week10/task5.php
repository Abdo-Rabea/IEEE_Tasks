<?php
echo basename(__FILE__);
echo "\n";
echo pathinfo(__FILE__, PATHINFO_BASENAME);
echo "\n";
echo $_SERVER['SCRIPT_NAME'];
echo "\n";
echo $_SERVER['PHP_SELF'];

// Output
// "index.php"
// "index.php"
// "index.php"
// "index.php"