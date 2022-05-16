<?php

require_once "./Contracts/SortInterface/SortArray.php";
require_once "./vendor/RandomArray/RandomArray.php";
require_once "./MergeSort/BeautifulArrayPrint.php";
require_once "./MergeSort/Merge.php";

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


# test recursiveMergeSort
//echo "\n-------------Recursive Merge SORT-------------\n";
//require_once "./MergeSort/RecursiveMergeSort.php";
//$m = new RecursiveMergeSort();
//$m->printArray($A);
//$A = $m->sort($A);
//$m->printArray($A);

# test naturalMergeSort
//echo "\n-------------Natural Merge SORT-------------\n";
//require_once "./MergeSort/NaturalMergeSort.php";
//$m = new NaturalMergeSort();
//$m->printArray($A);
//$A = $m->sort($A);
//$m->printArray($A);

# test QuickSort
//echo "\n-------------Quick SORT-------------\n";
require_once "./QuickSort/QuickSort.php";
$q = new QuickSort();
$q->printArray($A);
$A = $q->sort($A);
$q->printArray($A);