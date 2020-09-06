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
    echo "Factorial of the number is:-$factorial <br />";
    

    echo "<br>";
    echo "<br>";
    echo "<br>";


    // Write a php script to calculate and display:
    // Average temperature, 

    $array= array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

    // print_r($array);
    $sum =0;
    $arr_size=count($array);
    //Avg temprature
    for($i=0 ; $i < $arr_size ; $i++){
        $sum = $sum + $array[$i];
    }
    $avg = $sum / $arr_size;

    echo "Average temprature :-".round($avg,1);

    // Seven lowest temperatures
    sort($array);
    echo "<br>";
    echo "</br> Seven lowest temperatures:- </br> ";
    $result= array_slice($array,0,7);
    print_r($result);

    // Seven highest temperatures

    echo "</br> Seven highest temperatures:- </br> ";
    $result= array_slice($array,-7,7);
    print_r($result);
 

?>