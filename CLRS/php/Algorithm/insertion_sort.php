<?php

require_once './helpers.php';

function mySort(array $unsortedArray)
{
    if(empty($unsortedArray)) throw new Exception('How I can sort an empty array for you??');

    if(count($unsortedArray) === 1) return $unsortedArray;

    $steps = 0;

    for($i = 1; $i < count($unsortedArray); $i ++){
        $steps ++;

        $key = $unsortedArray[$i];

        $j = $i - 1;

        while($j >= 0 && $unsortedArray[$j] > $key){
            $steps ++;
            $unsortedArray[$j + 1] = $unsortedArray[$j];
            $j --;
        }
        $unsortedArray[++$j] = $key;
    }

    return [$unsortedArray, $steps];
}

$repeat = (int)readline('How many times repeat experiment?');
$n = (int)readline('Enter length of array:');

$min = $n ** 3;
$max = $sum = 0;

for($i = 0; $i < $repeat; $i ++){
    $unsortedArray = makeRandomArray($n);
    
    [$sortedArray, $steps] = mySort($unsortedArray);
    
    if($steps < $min) $min = $steps;
    
    if($steps > $max) $max = $steps;

    $sum += $steps;
}

myEcho("Repeat = $repeat", 'green');
myEcho("N = $n", 'green');
myEcho("Avg = " . $sum / $n , 'green');
myEcho("Max = $max", 'red');
myEcho("Min = $min", 'yellow');




