<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <?php
    //1
    function convertToLowerCase ($colors){
     $toLowerCase = array_map('strtolower' , $colors);
     return $toLowerCase;
    }


    $colors = array("RED" , "BLUE" , "WHITE" , "YELLOW");
    $toLowerCase = convertToLowerCase($colors);
    foreach ($toLowerCase as $color){
        echo "$color <br>";
    }
    echo "---------------------------------------------------------------------------- <br>";
    //2
    $ByFour = [];
    for ($i = 200; $i<=250; $i++){
        if ($i % 4 == 0){
            $ByFour [] = $i;
        }
    }
    echo implode(' ' , $ByFour) . "<br>";
    echo "---------------------------------------------------------------------------- <br>";
    //3
    function getStringLengths($words) {
        
        $shortestLength = PHP_INT_MAX; 
        $longestLength = 0; 
    
       
        foreach ($words as $word) {
            $length = strlen($word); 
    
         
            if ($length < $shortestLength) {
                $shortestLength = $length; 
            }
    
       
            if ($length > $longestLength) {
                $longestLength = $length; 
            }
        }
    
        
        echo "The shortest array length is $shortestLength. The longest array length is $longestLength.\n <br>";
    }
    
    $words = array("abcd", "abc", "de", "hjjj", "g", "wer");
    
   
    getStringLengths($words);
    echo "---------------------------------------------------------------------------- <br>";
    //4
    function generateUniqueRandomNumbers($min, $max, $count) {
      
        if ($max - $min + 1 < $count) {
            return "Not enough unique numbers in the specified range.";
        }
        
    
        $numbers = range($min, $max);
        
      
        shuffle($numbers);
        
      
        $uniqueRandomNumbers = array_slice($numbers, 0, $count);
        
       
        return implode(" ", $uniqueRandomNumbers) . "<br>";
    }
    

    $min = 11;
    $max = 20;
    $count = 10;
    

    $output = generateUniqueRandomNumbers($min, $max, $count);
    echo $output;
    echo "---------------------------------------------------------------------------- <br>";
    //5
    function findLowestNonZero($array) {
    
        $filteredArray = array_filter($array, function($value) {
            return $value !== 0; 
        });
    
      
        if (empty($filteredArray)) {
            return "No non-zero integers in the array.";
        }
    
    
        return min($filteredArray);
    }

    $array1 = array(2, 0, 10, 12, 6);
    

    $output = findLowestNonZero($array1);
    echo $output; 
    ?>
</body>
</html>