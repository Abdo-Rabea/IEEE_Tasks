<?php

$handle = fopen("elzero.txt", "r+");
fseek($handle, 6);
fwrite($handle, "Elzero");
