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
    for ($i = 1;$i<=10;$i++){
        echo $i . "-";
    }
    echo "<br>";
    echo"----------------------------------------------------------<br>";
    //2
    $number = 0;
    for ($i = 0; $i<=30; $i++){
       $number += $i;
    }
    echo "Total Number is :" . $number . "<br>";
    echo"----------------------------------------------------------<br>";
    //3
    $rows = 5;
    $columns = 5;
    
    $pattern = [
        ['A', 'A', 'A', 'A', 'A'],
        ['A', 'A', 'B', 'B', 'B'],
        ['A', 'A', 'C', 'C', 'C'],
        ['A', 'D', 'D', 'D', 'D'],
        ['E', 'E', 'E', 'E', 'E']
    ];
    
   
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j < $columns; $j++) {
            echo $pattern[$i][$j] . " ";
        }
        
        echo "<br>"; }
        echo"----------------------------------------------------------<br>";
        //4

    $rows2 = 5;
    $columns2 = 5;
    
    $pattern2 = [
        ['1', '1', '1', '1', '1'],
        ['1', '1', '1', '2', '2'],
        ['1', '1', '3', '3', '3'],
        ['1', '4', '4', '4', '4'],
        ['5', '5', '5', '5', '5']
    ];
    for ($i = 0; $i < $rows2; $i++) {
        for ($j = 0; $j < $columns2; $j++) {
            echo $pattern2[$i][$j] . " ";
        }
        
        echo "<br>"; }
        echo"----------------------------------------------------------<br>";
        //5

        $size = 5;

       
        for ($i = 0; $i < $size; $i++) {
          
            for ($j = 0; $j < $size; $j++) {
               
                if ($i == $j) {
                    echo ($i + 1) . " ";  
                } else {
                    echo "0 ";  
                }
            }
            echo "<br>";  
        }
        echo"----------------------------------------------------------<br>";
        //6

$number = 5;


$factorial = 1;


for ($i = 1; $i <= $number; $i++) {
    $factorial *= $i;  
}

echo "Factorial of $number is: $factorial <br>";
echo"----------------------------------------------------------<br>";
//7

echo '<table border="1" cellpadding="3px" cellspacing="0px">';


for ($row = 1; $row <= 6; $row++) {
    echo '<tr>';
    
 
    for ($col = 1; $col <= 5; $col++) {
        echo '<td>' . $row * $col . '</td>'; 
    }
    
    echo '</tr>';
}

echo '</table>';
    
    
    
    
    ?>
</body>
</html>