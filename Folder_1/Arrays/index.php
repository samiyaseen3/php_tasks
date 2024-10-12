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
     $colors = array('white', 'green', 'red');
     sort($colors);
     foreach ($colors as $color){
        echo "<li>" . $color . "</li>";
     };
     //2
     echo"----------------------------------------------------------<br>";
     $cities= array( 
        "Italy"=>"Rome", 
        "Luxembourg"=>"Luxembourg", 
        "Belgium"=> "Brussels",
        "Denmark"=>"Copenhagen", 
        "Finland"=>"Helsinki", 
         "France" => "Paris",
         "Slovakia"=>"Bratislava",
         "Slovenia"=>"Ljubljana", 
         "Germany" => "Berlin", 
         "Greece" => "Athens", 
         "Ireland"=>"Dublin",
          "Netherlands"=>"Amsterdam", 
          "Portugal"=>"Lisbon", 
          "Spain"=>"Madrid" );
          
          asort($cities);
          foreach($cities as $country => $capital){
             echo "The Capital of $country is $capital <br>";
          }
          //3
          echo"----------------------------------------------------------<br>";
          $theFirstColor = array(4 => "white" , 6 => "green" , 11 => "red");
          $firstElement = reset($theFirstColor);
          echo($firstElement) . "<br>";
          //4
          echo"----------------------------------------------------------<br>";
          $numbers = array(1,2,3,4,5);
          $location = 3;
          $newItem = '$';
          array_splice($numbers , $location,0,$newItem);
          echo implode(' ' , $numbers) . "<br>";
          //5
          echo"----------------------------------------------------------<br>";
          $frutis = array("d" => "lemon" , "a" => "orange" , "b" => "banana" , "c" => "apple");
          ksort($frutis);
          foreach($frutis as $key => $value){
            echo"$key = $value<br>";
          }
          //6
          echo"----------------------------------------------------------<br>";
          $temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
          $average = array_sum($temperatures ) / count($temperatures);
          sort($temperatures);
          $lowest = array_slice($temperatures , 0 , 5);
          $highest = array_slice($temperatures , -5);
          echo "Average is : $average<br>";
          echo "lowest is :" . implode(" , " , $lowest) . "<br>"; 
          echo "highest is :" . implode(" , " , $highest) . "<br>"; 
          //7
          echo"----------------------------------------------------------<br>";
          $array1 = array("color" => "red" , 2 , 4);
          $array2 = array("a" , "b" , "color" => "green" , "shape" => "trapezoid" , 4);
          $array3 = array_merge($array1 , $array2);
          print_r($array3);
          echo "<br>";
          //8
          echo"----------------------------------------------------------<br>";
          $ArrayInLowerCase = array("red" , "blue" , "white" , "yellow");
          $ArrayInUpperCase = array_map("strtoupper" , $ArrayInLowerCase);
          print_r($ArrayInUpperCase) . "<br>";




          



    
    
    ?>
</body>

</html>