<?php
// start using cmd
$friends = [
    "AG" => "Ahmed Gamal",
    "OM" => "Osama Mohamed",
    "MG" => "Mahmoud Gamal",
    "AS" => "Ahmed Samy",
    "FA" => "Farid Ahmed",
    "SM" => "Sayed Mohamed"
];

print_r(array_chunk(array_change_key_case($friends), 2, true));
// Output
//   Array
//   (
//     [0] => Array
//       (
//         [ag] => Ahmed Gamal
//         [om] => Osama Mohamed
//       )
//     [1] => Array
//       (
//         [mg] => Mahmoud Gamal
//         [as] => Ahmed Samy
//       )
//     [2] => Array
//       (
//         [fa] => Farid Ahmed
//         [sm] => Sayed Mohamed
//       )
//   )