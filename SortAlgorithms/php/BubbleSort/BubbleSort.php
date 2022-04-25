<?php

require_once 'SortAlgorithms/php/Contracts/SortInterface/SortArray.php';

class BubbleSort implements SortArray
{
    public function sort(array $A):array
    {
        for($i = count($A)-1; $i > 0; $i--)
        {
            for($j = 0; $j < $i; $j ++)
            {
                if($A[$j] > $A[$j + 1])
                {
                    $temp = $A[$j+1];
                    $A[$j+1] = $A[$j];
                    $A[$j] = $temp;
                }
            }
        }
        return $A;
    }
}