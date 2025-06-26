<?php
declare(strict_types=1); // Enable strict type checking
function addTwo(){
    $a = 2;
    $b = 3;
    $sum = $a + $b;
    echo "The sum of $a and $b is: $sum\n";
    echo "<br>";
}

addTwo();
addTwo();
addTwo();

function addThree($a, $b, $c){
    $sum = $a + $b + $c;
    echo "The sum of $a, $b and $c is: $sum\n";
    echo "<br>";
}// Calling the function with three arguments
addThree(2, 3, 4);

// Function with default parameters
function addFour($a, $b, $c, $d = 0){
    $sum = $a + $b + $c + $d;
    echo "The sum of $a, $b, $c and $d is: $sum\n";
    echo "<br>";
}//make parameter default from back to front

addFour(2,3, 4);

// function add(int $a, int $b){
//     $sum = $a + $b;
// }

function add(int|float $a, int|float $b): int|float {
    return $a + $b;
}

// add(2, "Test"); // Calling the function with two arguments

function myFunc(?string $name): void {
    echo "Hello, " . ($name ?? "Guest") . "!\n";
}

myFunc("John");
// myFunc();

//Variadic functions
// function sum(...$numbers): int {
//     $total = 0;
//     foreach ($numbers as $num) {
//         $total += $num;
//     }
//     echo "The total is: " . $total;
// }

// sum(1, 2, 3); // Calling the function with multiple arguments

$don = function(int|float $a, int|float $b){
    return $a + $b;
};

$don(2, 3); // Calling the anonymous function

// IIF Function

//Arrow function

$sum = fn($a, $b) => $a + $b;

echo "The sum is: " . $sum(2, 3) . "\n";

function hello(){
    return "Hello World!";
}

$result = hello(); // Calling the function
echo "The result is: " . $result . "\n";

function isVote($age): string{
    if ($age >= 18) {
        return "You are eligible to vote.";
    } else {
        return "You are not eligible to vote.";
    }
}

isVote(20); // Calling the function with an argument
echo "Age 20: " . isVote(20) . "\n";
