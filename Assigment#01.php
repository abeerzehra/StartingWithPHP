<!DOCTYPE html5>

<html>
    <title>Assigment1</title>
</html>

<?php
$a=5;
$b=4;
echo "<h2>Before Swaping!  a=".$a.", b=".$b."</h2>";


$a=$a + $b;
$b = $a -$b ;
$a = $a - $b;
echo "<h2>After Swaping!  a=".$a.", b=".$b."</h2>";

//Perform addition/subtraction of two string type variables:
	$foo = "100foo"; 	// string
    $bar = "200bar";   	// string	
    
    $c = $foo + $bar;		// result should be 300
    
    echo "After addition:- ".$c;

    $c = $bar - $foo;	
    	
    
    echo "After Subtraction:- ".$c;


?>