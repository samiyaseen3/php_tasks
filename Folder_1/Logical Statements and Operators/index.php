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
    $firstNum = 10;
    $secondNum = 10;
    if ($firstNum + $secondNum == 30){
        echo "true <br>";
    }else{
        echo "false <br>";
    }
    echo"----------------------------------------------------------<br>";
    //2
    function isMultipleOfThree ($number){
      if ($number < 0 ){
        return 'Input should be a postive number ! <br>';
      }
      return $number % 3 === 0 ? 'true <br>' : 'false <br>';
    }
    $number = 20;
    $outPut = isMultipleOfThree($number);
    echo $outPut;
    echo"----------------------------------------------------------<br>";
    //3
    $integerValue = 50;
    if ($integerValue >=20 && $integerValue <=50 ){
        echo "true <br>";
    }
    else{
        echo "false <br>";
    }
    echo"----------------------------------------------------------<br>";
    //4
    function findLargestNumber ($numbers){
      if (count($numbers) !== 3){
        return 'it must be just 3 numbers';
      }
      $largest = max($numbers);
      return $largest;
    }
    $numbers = [1 , 5 , 9];
    $result = findLargestNumber($numbers);
    echo $result . "<br>";
    echo"----------------------------------------------------------<br>";
    //5
    function calculateElectricityBill($units) {
        if ($units < 0) {
            return 'Units cannot be negative.';
        }
    
        $bill = 0;
    
       
        if ($units <= 50) {
            $bill = $units * 2.50;
        } elseif ($units <= 150) {
            $bill = (50 * 2.50) + (($units - 50) * 5.00);
        } elseif ($units <= 250) {
            $bill = (50 * 2.50) + (100 * 5.00) + (($units - 150) * 6.20);
        } else {
            $bill = (50 * 2.50) + (100 * 5.00) + (100 * 6.20) + (($units - 250) * 7.50);
        }
    
        return $bill;
    }
    
    
    $units = 300; 
    $output = calculateElectricityBill($units);
    echo "The monthly electricity bill for $units units is: " . number_format($output, 2) . " JOD <br>";
    echo"----------------------------------------------------------<br>";
    //6
    function calculator($num1, $num2, $operation) {
        switch ($operation) {
            case 'addition':
                return $num1 + $num2;
            case 'subtraction':
                return $num1 - $num2;
            case 'multiplication':
                return $num1 * $num2;
            case 'division':
                if ($num2 != 0) {
                    return $num1 / $num2;
                } else {
                    return 'Error: Division by zero.';
                }
            default:
                return 'Error: Invalid operation.';
        }
    }
    $num1 = 10; 
    $num2 = 5;  
    $operation = 'addition'; 
    $output = calculator($num1, $num2, $operation);
    echo "The result of $operation between $num1 and $num2 is: $output <br>";
    echo"----------------------------------------------------------<br>";
    //7

function isEligibleToVote($age) {
    if ($age < 0) {
        return 'Age cannot be negative.';
    }
    
    return $age >= 18 ? 'is eligible to vote' : 'is not eligible to vote';
}


$age = 15; 
$output = isEligibleToVote($age);
echo "The person with age $age $output. <br>";
echo"----------------------------------------------------------<br>";
//8
function postiveNumber($number){
    if ($number < 0){
        echo "Negative Number <br>";
    }
    elseif ($number === 0){
      echo "Zero <br>";
    }
    else {
        echo "Postive Number <br>";
    }
}
$postiveNumber = 40;
$resultOfPostiveNumber = postiveNumber($postiveNumber);
echo $resultOfPostiveNumber;
echo"----------------------------------------------------------<br>";
//9
function calculateGrade($scores) {
    
    if (!is_array($scores) || count($scores) === 0) {
        return 'Invalid input. Please provide an array of scores.';
    }

 
    $totalScore = array_sum($scores);
    $averageScore = $totalScore / count($scores);

 
    if ($averageScore >= 90) {
        return 'A';
    } elseif ($averageScore >= 80) {
        return 'B';
    } elseif ($averageScore >= 70) {
        return 'C';
    } elseif ($averageScore >= 60) {
        return 'D';
    } else {
        return 'F';
    }
}


$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];
$grade = calculateGrade($scores);
echo "The student's grade is: $grade"; 


    

    
    
    
    
    ?>
</body>

</html>