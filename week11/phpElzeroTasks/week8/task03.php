<?php
$friends = [
    "Ahmed Gamal" => "AG",
    "Osama Mohamed" => "OM",
    "Mahmoud Gamal" => "MG",
    "Ahmed Samy" => "AS"
];

print_r(array_change_key_case(array_reverse(array_flip($friends))));
  // Output
//   Array
//   (
//     [as] => Ahmed Samy
//     [mg] => Mahmoud Gamal
//     [om] => Osama Mohamed
//     [ag] => Ahmed Gamal
//   )