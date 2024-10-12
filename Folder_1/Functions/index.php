<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <?php
    //1
    function isPrime($number) {
        
        if ($number < 2) {
            return false;
        }
    
        
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false; 
            }
        }
        return true; 
    }
    if (isPrime(3)){
        echo "is a prime number<br>";
    }else{
        echo "it's not a prime number<br>";
    }
    echo"----------------------------------------------------------<br>";
    //2
    function reversString($str){
     $reveresString = strrev($str);
     echo ($reveresString)."<br>";
    }
    reversString("remove");
    echo"----------------------------------------------------------<br>";
    //3
    function swap(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $x = 12;
    $y = 10;
    swap($x, $y);
    echo "x = $x, y = $y <br>"; 
    echo"----------------------------------------------------------<br>";
    //4
    function ArmstrongNumber($num){
         $digits = str_split($num);
         $sum = 0;

         foreach ($digits as $digit){
            $sum += pow($digit , 3);
         }

         return $sum === (int)$num;
    }
    $number = 407;
    if (ArmstrongNumber($number)){
        echo "$number is an Armstrong number.<br>";
    } else {
        echo "$number is not an Armstrong number.<br>";
    }
    echo"----------------------------------------------------------<br>";
    //5
    function Palindrome($string){
        $normalizedString = preg_replace("/[^A-Za-z0-9]/", '', $string);
        $normalizedString = strtolower($normalizedString);
        $reversedString = strrev($normalizedString);
        return $normalizedString === $reversedString;
    }
    $input = " Eva, can I see bees in a cave?
";
if (Palindrome($input)){
    echo "Yes it's <br>";
}
else{
    echo "No , it's not <br>";
}
echo"----------------------------------------------------------<br>";
//6
function removeDuplicates(array $elements){
  $emptyArray = [];
  foreach ($elements as $element){
    if (!in_array($element , $emptyArray)){
        $emptyArray [] = $element; 
    }
  }
  return $emptyArray;
}
$numbers = [1, 2, 2, 3, 4, 4, 5];
$uniqueNumbers = removeDuplicates($numbers);
print_r($uniqueNumbers);

    


    
    
    
    
    
    
    ?>
</body>

</html>