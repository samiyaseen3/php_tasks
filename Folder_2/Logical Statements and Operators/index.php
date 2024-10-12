<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logical Statements and Operators</title>
</head>
<body>
    <?php
    //1
    $year = 2013;
    if ($year < 2024){
        echo "This year is not a leap year.\n <br>";

    }
    else{
        echo "This year is  a leap year.\n <br>";
    }
    echo"----------------------------------------------------------<br>";
    //2
    $temperature = 27;
    if ($temperature < 20){
        echo "winter <br>";
    }
    else{
        echo "summer <br>";
    }
    echo"----------------------------------------------------------<br>";
    //3
    function calculateSum($firstInteger, $secondInteger) {

        $sum = $firstInteger + $secondInteger;
    
  
        if ($firstInteger === $secondInteger) {
         
            $result = $sum * 3;
            echo "($firstInteger + $secondInteger) * 3 = $result\n";
        } else {
        
            echo "The sum of $firstInteger and $secondInteger is $sum.\n";
        }
    }
    

    $input = ['firstInteger' => 2, 'secondInteger' => 2];
    $firstInteger = $input['firstInteger'];
    $secondInteger = $input['secondInteger'];
    

    calculateSum($firstInteger, $secondInteger);
    



    
    
    
    ?>
</body>
</html>