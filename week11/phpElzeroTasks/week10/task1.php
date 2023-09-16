<?php

echo round(disk_total_space("c:") / (1024 ** 4), 2) . " Terabyte \n";
echo round(disk_total_space("d:") / (1024 ** 4), 2) . " Terabyte \n";

// Output Examples
// "1.37 Terabyte"
// "0.46 Terabyte"

// 0.4 Terabyte 
// 0.43 Terabyte