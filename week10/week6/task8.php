<?php

$message = "Hello";

$$message = fn ($v) => $message . " " . $v;

echo $Hello("Osama"); // Hello Osama