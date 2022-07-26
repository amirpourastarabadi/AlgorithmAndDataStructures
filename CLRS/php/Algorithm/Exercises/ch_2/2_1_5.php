<?php

require_once __DIR__ . '/../../helpers.php';

// disable warnings
error_reporting(E_ALL ^ E_WARNING);


function add(array $A, array $B)
{
    $steps = 0;
    $i = count($A);
    $j = count($B);
    $carry = 0;
    $result = [];

    while ($i >= 0 && $j >= 0) {
        $steps ++;
        $carry = $carry + $A[--$i] + $B[--$j];
        $result[] = $carry % 2;
        $carry = (int) ($carry / 2);
    }

    while ($i >= 0) {
        $steps ++;
        $carry = $carry + $A[--$i];
        $result[] = $carry % 2;
        $carry = (int) ($carry / 2);
    }

    while ($j >= 0) {
        $steps ++;
        $carry = $carry + $B[--$j];
        $result[] = $carry % 2;
        $carry = (int) ($carry / 2);
    }

    $result = array_reverse($result);

    return [$result, $steps];
}


$repeat = (int)readline('How many times repeat experiment?');
$n = (int)readline('Enter length of arrays:');

$min = PHP_INT_MAX;
$max = $sum = 0;

for($i = 0; $i < $repeat; $i ++){
    $A = makeRandomArray($n, 0, 1);
    $B = makeRandomArray($n, 0, 1);

    [$sortedArray, $steps] = add($A, $B);
    
    if($steps < $min) $min = $steps;
    
    if($steps > $max) $max = $steps;

    $sum += $steps;
}

myEcho("Repeat = $repeat", 'green');
myEcho("N = $n", 'green');
myEcho("Avg = " . $sum / $n , 'green');
myEcho("Max = $max", 'red');
myEcho("Min = $min", 'yellow');