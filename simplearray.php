<?php
function findLargest($array)
{
	
    $max = max($array);	
    
    echo $max;
    $index = 0;
    $key2 = 0;
	  
	foreach($array as $number){
	    if($number == $max)
	        $key2 = $index;
	   $index = $index + 1;
	    
	}
	 
	return $key2;
	
	
	

	

}

$test1 = [1, 20, 3, 4, 5, 6, 7, 8, 9];
$test2 = [1, 2, 4, 50, 50, 8, 30];
$test3 = [0, 0, 0, 0, 0, 0];
$test4 = [1, 2, 4, 50, 50, 8, 50];

echo "findLargest([1, 20, 3, 4, 5, 6, 7, 8, 9]): " . findLargest($test1) . "<br/>";    // expected 1 
echo "\nfindLargest([1, 2, 4, 50, 50, 8, 30]): " . findLargest($test2) . "<br/>";        // expected 4 
echo "\nfindLargest([0, 0, 0, 0, 0, 0]): " . findLargest($test3) . "<br/>";              // expected 5
echo "\nfindLargest([1, 2, 4, 50, 50, 8, 50]): " . findLargest($test4) . "<br/>";        // expected 6
?>

<?php 
function divideByThree($array)
{	
	
	$key = 0;
    $key2 = 0;
    
    foreach($array as $number)
	    if($number % 3 == 0){
	            if($number !=0)
	                $key2 = $key2 +1;
	    }

    
            
    return $key2;
	
	
	
	
	
	
}

$test1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$test2 = [1, 2, 4, 5, 7, 8, 30];
$test3 = [0, 0, 0, 0, 0, 0];
$test4 = [1, 2, 4, 50, 50, 8, 50];

echo "divideByThree([1, 2, 3, 4, 5, 6, 7, 8, 9]): " . divideByThree($test1) . "<br/>";    // expected 3
echo "\ndivideByThree([1, 2, 4, 5, 7, 8, 30]): " . divideByThree($test2) . "<br/>";         // expected 1
echo "\ndivideByThree([0, 0, 0, 0, 0, 0]): " . divideByThree($test3) . "<br/>";             // expected 0
echo "\ndivideByThree([1, 2, 4, 50, 50, 8, 50]): " . divideByThree($test3) . "<br/>";       // expected 0
?>