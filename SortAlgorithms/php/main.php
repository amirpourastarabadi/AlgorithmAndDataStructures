<?php

require_once "SortAlgorithms/php/vendor/RandomArray/RandomArray.php";

$A = (new RandomArray())->make(4, 1,10);

# test bubbleSort
require_once "SortAlgorithms/php/BubbleSort/BubbleSort.php";
var_dump($A);
$A = (new BubbleSort())->sort($A);
var_dump($A);