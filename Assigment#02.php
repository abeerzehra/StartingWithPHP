<!DOCTYPE html5>

<html>
    <title>Assigment2</title>
</html>

<?php


/*CREATE AN UNSORTED ARRAY AND SORT IT IN ASCENDING ORDER.
 For Example: 
Given Array: array( 3,5,8,21,1,8,5 ) 
Result Array: array( 1,3,5,5,8,8,21 ) */

$array = array(3,5,8,21,1,8,5);

echo "<h2>Array before sorting!</h2>";

var_dump($array);

//Sorting the array 


for($i = 0; $i < $n ; $i++) 
{ 
    $low = $i; 
    for($j = $i + 1; $j < $n ; $j++) 
    { 
        if ($array[$j] < $array[$low]) 
        { 
            $low = $j; 
        } 
    } 
    // swap the minimum value to $ith node 
    if ($array[$i] > $array[$low]) 
    { 
        $tmp = $arr[$i]; 
        $array[$i] = $array[$low]; 
        $array[$low] = $tmp; 
    } 
} 



 

 echo "<h2>Array After sorting!</h2>";

var_dump($array);

?>