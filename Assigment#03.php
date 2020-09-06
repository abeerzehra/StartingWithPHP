<?php 

    // Create program to calculate factorial of a number. 
    // 5! = 5 * 4 * 3 * 2 * 1 = 120

    echo "<h3>Calculating the fatorial <h3>";
    $num = 5;
    echo "Calculating factorial of ".$num ;
    $factorial=$num;
    for($i =1; $i < $num ; $i++){
        $factorial = $factorial * $i;
        
    }

    echo "<br>";
    echo "Factorial of the number is:-";
    echo $factorial;

    echo "<br>";
    echo "<br>";
    echo "<br>";


    // Write a php script to calculate and display:
    // Average temperature, 
    // Seven lowest temperatures
    // Seven highest temperatures

    $array[]= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    // print_r($array);
    $sum =0;
    //Avg temprature
    for($i=0 ; $i < sizeof($array) ; $i++){
        $sum = $sum + $array[$i];
    }
    $avg = $sum / sizeof($array);

    echo "Average temprature :-".$avg;
 

?>