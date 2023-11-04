<?php
$numbers = array(2, 4, 6, 8, 10);

// i. 
echo "i. The first element of the array is: " . $numbers[0] . "<br>";

// ii. 
$lastIndex = count($numbers) - 1;
echo "ii. The last element of the array is: " . $numbers[$lastIndex] . "<br>";

// iii. 
$numbers[] = 12;
echo "iii. Added 12 to the end of the array. New array: " . implode(", ", $numbers) . "<br>";

// iv. 
$sum = array_sum($numbers);
echo "iv. The sum of all elements in the array is: " . $sum . "<br>";
?>