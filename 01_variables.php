<?php

$name = "John Doe"; // This is a string variable
$age = 30; // This is an integer variable
$isFather=true;
$money = 100.50; // This is a float variable
$salary = 50000; // This is a float variable

echo $name; 
echo gettype($name) . "<br>"; // Outputs: string
echo gettype($age) . "<br>"; // Outputs: integer
echo gettype($isFather) . "<br>"; // Outputs: boolean
echo gettype($money) . "<br>"; // Outputs: double
echo gettype($salary) . "<br>"; // Outputs: double
var_dump(is_string($name)); // Outputs: bool(true);