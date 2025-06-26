<?php
//Class is conducted by Hasin Haydar

echo "Hello, World!\n";
echo "Hello, World!<br>";
echo "Hello";

//Laravel Herd Software

echo "<h1>This is a heading</h1>";

//'php -S localhost:8000' to run the server


//Variables
$name = "John";
$age = 30;
$email = "john@example.com";
$isMale = true; //camelCase
$is_female = false; //snake_case

echo "My name is $name and I am $age years old.<br>";
// echo 'My name is $name and I am $age years old.<br>';
echo "You can contact me at $email.";
echo "<br>";

//No end tag needed in PHP files

$x = 10;
$y = 15;

$sum = $x + $y;
echo "The sum of $x and $y is $sum.<br>";

$difference = $x - $y;
echo "The difference of $x and $y is $difference.<br>";
echo PHP_EOL; //New line in PHP

$multiplication = $x * $y; //X into Y, X times Y, X multiplied by Y
echo "The multiplication of $x and $y is $multiplication.<br>";

$division = $x / $y; //X divided by Y, X over Y
echo "The division of $x and $y is $division.<br>";

$modulus = $x % $y; //X mod Y, X modulo Y, X remainder Y
echo "The modulus of $x and $y is $modulus.<br>";

$height = 71; //Height in inches
$cm = $height * 2.54; //Inches to cm
echo "My height is $height inches or $cm cm.";

$feet = $height / 12; //Height in feet
$inches = $height % 12; //Height in inches
echo "<br>My height is $feet feet and $inches inches.<br>";