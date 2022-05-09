<?php

require_once "./vendor/RandomArray/RandomArray.php";
require_once "./Contracts/SortInterface/SortArray.php";

$A = (new RandomArray())->make(10, 1, 10);

# test bubbleSort
//echo "\n-------------BUBBLE SORT-------------\n";
// require_once "./BubbleSort/BubbleSort.php";
// var_dump($A);
// $A = (new BubbleSort())->sort($A);
// var_dump($A);


# test insertionSort
//echo "\n-------------INSERTION SORT-------------\n";
//require_once "./InsertionSort/InsertionSort.php";
//var_dump($A);
//$A = (new InsertionSort())->sort($A);
//var_dump($A);


# test selectionSort
//echo "\n-------------SELECTION SORT-------------\n";
//require_once "./SelectionSort/SelectionSort.php";
//var_dump($A);
//$A = (new SelectionSort())->sort($A);
//var_dump($A);


# test selectionSort
echo "\n-------------Recursive Merge SORT-------------\n";
require_once "./MergeSort/RecursiveMergeSort.php";
$m = new RecursiveMergeSort();
$m->printArray($A);
$A = $m->sort($A);
$m->printArray($A);