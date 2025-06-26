
<a href="function.php">Go to Function</a><?php
//'php -v' for version
//'composer -v' for composer version

// Extension for PHP : PHP IntelliSense, PHP server, PHP Intelephense, Code Spell Checker, Auto Rename Tag, PHP Debug, PHP DocBlocker, PHP Namespace Resolver, PHP CS Fixer, PHP Snippets, Laravel Blade Snippets

echo "Hello World!";
// To run this file, use the command: php index.php

$name = "John Doe";

$stringLength = strlen($name); // Get the length of the string
echo "\nLength of the string is: " . $stringLength;
echo "<br>";

$stringWords = str_word_count($name); // Count the number of words in the string
echo "\nNumber of words in the string is: " . $stringWords;
echo "<br>";

$stringReversed = strrev($name); // Reverse the string
echo "\nReversed string is: " . $stringReversed;

$stringReplaced = str_replace("John", "Jane", $name); // Replace a substring in the string
echo "\nReplaced string is: " . $stringReplaced;
echo "<br>";

$stringLower = strtolower($name); // Convert the string to lowercase
echo "\nLowercase string is: " . $stringLower;
echo "<br>";

$stringUpper = strtoupper($name);
echo "\nUppercase string is: " . $stringUpper;
echo "<br>";

$stringUpperFirst = ucfirst($name); // Convert the first character of the string to uppercase
echo "\nUppercase first character string is: " . $stringUpperFirst;
echo "<br>";

$stringTrimSpaces = trim($name); // Remove whitespace from the beginning and end of the string
echo "\nTrimmed string is: " . $stringTrimSpaces;
echo "<br>";

//Hashing
$hashedString = md5($name); // Hash the string using MD5
echo "\nHashed string is: " . $hashedString;
echo "<br>";

$htmlString = "<p>This is a paragraph.</p>"; // HTML string
$escapedHtml = htmlspecialchars($htmlString);
echo "\nEscaped HTML string is: " . $escapedHtml;

$name = "LARAVEL";

$color = "red, green, blue, yellow, orange, purple";
$colorArray = explode(", ", $color); // Split the string into an array
echo "\nColor array is: ";
print_r($colorArray); echo "<br>"; //print_r is used to print arrays and objects in a human-readable format


$colorString = implode(", ", $colorArray); // Join the array into a string
echo "\nColor string is: " . $colorString;
echo "<br>";