<?php
function sumEvenNumbers($numbers)
{
    $sum = 0;

    foreach ($numbers as $number) {
        if ($number % 2 === 0) {
            $sum += $number;
        }
    }

    return $sum;
}


$myArray = [1, 2, 3, 4, 5, 6];
$result = sumEvenNumbers($myArray);
echo "The sum of even numbers in the array is: $result";
?>