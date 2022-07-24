<?php

function prettyArray(array $arr){
    echo '[';
    foreach($arr as $key => $item){
        echo "$item";
        if($key < count($arr) - 1){
            echo ", ";
        }
    }
    echo ']';

    echo PHP_EOL;
}

function makeRandomArray(int $length, int $min = 0, int $max = 100)
{
    $array = [];

    for($i = 0; $i < $length; $i++){
        $array[] = random_int($min, $max);
    }

    return $array;
}

function myEcho(string $outPut, string $color)
{
    $color = strtolower($color);
    $colorCods = [ 
        'green' => "\e[32m",
        'red' => "\e[31m",
        'yellow' => "\e[33m",
        'blue' => "\e[34m",
    ];

    $colorCode = $colorCods[$color] ?? '';

    echo $colorCode.$outPut."\n";
}