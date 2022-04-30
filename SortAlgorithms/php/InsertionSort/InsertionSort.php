<?php

class InsertionSort implements SortArray
{

    public function sort(array $A): array
    {
        for($i = 1; $i < count($A); $i ++)
        {
            $temp = $A[$i];
            $j = $i - 1;
            while ($j >= 0 && $temp < $A[$j])
            {
                $A[$j+1] = $A[$j];
                $j --;
            }
            $A[$j+1] = $temp;
        }
        return $A;
    }
}