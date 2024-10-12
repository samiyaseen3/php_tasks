<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>
<body>
    
<?php
//1
function fibonacci($n) {

    $fibonacciSequence = [];

    $first = 0;
    $second = 1;


    for ($i = 0; $i < $n; $i++) {

        if ($i === 0) {
            $fibonacciSequence[] = $first;
        } elseif ($i === 1) {
            $fibonacciSequence[] = $second;
        } else {

            $next = $first + $second;
            $fibonacciSequence[] = $next;


            $first = $second;
            $second = $next;
        }
    }


    echo implode(', ', $fibonacciSequence) . "\n <br>";
}


$n = 10; 
fibonacci($n);
echo"----------------------------------------------------------<br>";
//2
function countCharacter($text, $character) {

    return substr_count($text, $character);
}

$inputString = 'Orange Coding Academy';

$characterToCount = 'c';

$result = countCharacter($inputString, $characterToCount);
echo "Expected Output: {$result}\n <br>"; 
echo"----------------------------------------------------------<br>";
//3
function fizzBuzz() {

    for ($i = 1; $i <= 50; $i++) {

        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz <br>";
        } 

        elseif ($i % 3 == 0) {
            echo "Fizz <br>";
        } 

        elseif ($i % 5 == 0) {
            echo "Buzz <br>";
        } 

        else {
            echo $i . " ";
        }
    }
}


fizzBuzz();
echo"----------------------------------------------------------<br>";
//4
function printFloydTriangle($n) {
    $num = 1; 

 
    for ($i = 1; $i <= $n; $i++) {
        
        for ($j = 1; $j <= $i; $j++) {
            echo $num . " "; 
            $num++; 
        }
        echo "\n <br>"; 
    }
}


$n = 5; 
printFloydTriangle($n);
echo"----------------------------------------------------------<br>";
//5



function printDiamondPattern($n) {

    for ($i = 1; $i <= $n; $i++) {

        echo str_repeat(" ", $n - $i);
        
      
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j) . " "; 
        }
        echo "\n"; 
    }

    for ($i = $n - 1; $i >= 1; $i--) {

        echo str_repeat(" ", $n - $i);
        
       
        for ($j = 0; $j < $i; $j++) {
            echo chr(65 + $j) . " "; 
        }
        echo "\n"; 
    }
}


$n = 5; 
printDiamondPattern($n);


?>
</body>
</html>