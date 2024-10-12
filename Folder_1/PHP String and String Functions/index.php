<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String and String Functions
    </title>
</head>
<body>
    
   <?php
   //1
   $str = "hello i'm sami yaseen";
   $strUpperCase = strtoupper($str);
   echo "In Upper Case :" . $strUpperCase . "<br>";
   $strLowerCase = strtolower($str);
   echo "In Lower Case :" . $strLowerCase . "<br>";
   $FirstUpper = ucfirst($str);
   echo "First Word Upper :" . $FirstUpper . "<br>";
   $FirstCapitalized = ucwords($str);
   echo "First Letter Of Each Word Capitalized :" . $FirstCapitalized . "<br>";

    
   
   echo"----------------------------------------------------------<br>";
   //2
   $numericString  = '085119';
   $hours = substr($numericString , 0 , 2);
   $minutes  = substr($numericString , 2 , 2);
   $secondes = substr($numericString , 4, 2);
   $formatted_time = $hours . ':' . $minutes . ':' . $secondes;
   echo "Formatted Time: " . $formatted_time . "<br>";

   echo"----------------------------------------------------------<br>";
   //3
   $sentence = 'I am a full stack developer at orange coding academy';


$word = 'orange';

// Use stripos() to check if the word exists in the sentence (case-insensitive)
if (stripos($sentence, $word) !== false) {
    echo "Word Found! <br>";
} else {
    echo "Word Not Found! <br>";
}

echo"----------------------------------------------------------<br>";
   //4
   $url = 'www.orange.com/index.php';

// Use pathinfo() to get the file name from the URL
$file_name = pathinfo($url, PATHINFO_BASENAME);

echo "File Name: " . $file_name . "<br>";

echo"----------------------------------------------------------<br>";
   //5

$email = 'info@orange.com';

// Use strstr() to get the part before the '@' symbol
$username = strstr($email, '@', true);


echo "Username: " . $username . "<br>";

echo"----------------------------------------------------------<br>";
   //6
   $string = 'info@orange.com';

// Use substr() to get the last three characters
$last_three_chars = substr($string, -3);


echo "Last Three Characters: " . $last_three_chars . "<br>";
echo"----------------------------------------------------------<br>";
   //7
   $characters = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';


function generateRandomPassword($length, $characters) {
    $password = '';
    $maxIndex = strlen($characters) - 1;

   
    for ($i = 0; $i < $length; $i++) {
       
        $randomIndex = (int) ((microtime(true) * 1000 + $i) % $maxIndex);
        $password .= $characters[$randomIndex];
    }

    return $password;
}


$passwordLength = 10; 


$randomPassword = generateRandomPassword($passwordLength, $characters);


echo "Random Password: " . $randomPassword . "<br>";
echo"----------------------------------------------------------<br>";
   //8
   $sentence = 'That new trainee is so genius.';


$new_word = 'Our';


$words = explode(' ', $sentence);


$words[0] = $new_word;


$modified_sentence = implode(' ', $words);


echo "Modified Sentence: " . $modified_sentence;



   ?>
</body>
</html>