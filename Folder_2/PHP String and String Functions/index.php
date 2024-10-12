<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String and String Functions</title>
</head>

<body>
    <?php
    //1
    function findFirstDifference($str1, $str2) {
        $length = min(strlen($str1), strlen($str2));
        for ($i = 0; $i < $length; $i++) {
            if ($str1[$i] !== $str2[$i]) {
                
                return "First difference between two strings at position " . ($i + 1) . ": \"" . $str1[$i] . "\" vs \"" . $str2[$i] . "\"";
            }
        }
        if (strlen($str1) !== strlen($str2)) {
            return "Strings differ in length, no match found after position $length.";
        }
    
        return "No differences found between the two strings.";
    }
    $string1 = 'dragonball';
$string2 = 'dragonboll';
$result = findFirstDifference($string1, $string2);
echo $result . "<br>";
    echo"----------------------------------------------------------<br>";
    //2
    function splitStringToArray($input) {
        
        $result = preg_split('/(?<=\s|[,.!?;])/', $input, -1, PREG_SPLIT_NO_EMPTY);
        
      
        foreach ($result as &$string) {
            $string = trim($string);
        }
        
        return $result;
    }
    
   
    $inputString = "Twinkle, twinkle, little star.";
    

    $outputArray = splitStringToArray($inputString);
    

    echo "array (" . count($outputArray) . ") {";
    foreach ($outputArray as $key => $value) {
        echo "[" . $key . "] => string (" . strlen($value) . ") \"" . $value . "\"\n";
    }
    echo "} <br>";
    echo"----------------------------------------------------------<br>";
    //3
    function insertStringAtPosition($original, $insert, $position) {
       
        if ($position < 0 || $position > strlen($original)) {
            return "Position is out of bounds.";
        }
    

        $newString = substr($original, 0, $position) . $insert . substr($original, $position);
        
        return $newString;
    }
    

    $originalString = 'The brown fox';

    $insertString = 'quick ';

    $insertPosition = 4; 
    

    $result = insertStringAtPosition($originalString, $insertString, $insertPosition);
    echo "Result: '{$result}'\n <br>"; 
    echo"----------------------------------------------------------<br>";
    //5
    function removeLeadingZeros($numberString) {
    
        $cleanedNumber = ltrim($numberString, '0');
    
   
        if ($cleanedNumber === '' || $cleanedNumber === '.') {
            return '0'; 
        }
    
 
        return $cleanedNumber;
    }
    

    $originalString = '0000657022.24';
    

    $result = removeLeadingZeros($originalString);
    echo "Expected Output: '{$result}'\n <br>"; 
    echo"----------------------------------------------------------<br>";
    //6
    function removeSubstring($originalString, $substring) {
        
        $modifiedString = str_replace($substring, '', $originalString);
        
        
        return trim($modifiedString);
    }
    

    $originalString = 'The quick brown fox jumps over the lazy dog';

    $substringToRemove = 'fox';
    

    $result = removeSubstring($originalString, $substringToRemove);
    echo "Expected Output: '{$result}'\n <br>";
    echo"----------------------------------------------------------<br>";
    //7
    function removeTrailingDashes($originalString) {
        
        $modifiedString = rtrim($originalString, '-');
        
        return $modifiedString;
    }
    
   
    $originalString = 'The quick brown fox jumps over the lazy dog---';
    

    $result = removeTrailingDashes($originalString);
    echo "Expected Output: '{$result}'\n <br>";
    echo"----------------------------------------------------------<br>";
    //8
    function removeSpecialCharacters($inputString) {
        
        $modifiedString = preg_replace('/[^\d]/', ' ', $inputString);
        
        
        return trim($modifiedString);
    }
    
    
    $inputString = '\"\\1+2/3*2:2-3/4*3';
    
    
    $result = removeSpecialCharacters($inputString);
    echo "Expected Output: '{$result}'\n <br>";
    echo"----------------------------------------------------------<br>";
    //9
    function selectFirstFiveWords($inputString) {

        $wordsArray = explode(' ', $inputString);
        
    
        $firstFiveWords = array_slice($wordsArray, 0, 5);
        
      
        return implode(' ', $firstFiveWords);
    }
    
 
    $inputString = 'The quick brown fox jumps over the lazy dog';
    

    $result = selectFirstFiveWords($inputString);
    echo "Expected Output: '{$result}'\n <br>";
    echo"----------------------------------------------------------<br>";
    //10
    function removeCommas($numericString) {

        $modifiedString = str_replace(',', '', $numericString);
        
        return $modifiedString;
    }
    

    $inputString = '2,543.12';
    

    $result = removeCommas($inputString);
    echo "Expected Output: '{$result}'\n <br>";
    echo"----------------------------------------------------------<br>";
    //11
    function printLetters() {
  
        $letters = [];
        
     
        for ($i = ord('a'); $i <= ord('z'); $i++) {
           
            $letters[] = chr($i);
        }
    
       
        echo implode(' ', $letters) . "\n";
    }
    

    printLetters();

   
    
    
    
    ?>
</body>

</html>