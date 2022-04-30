<?php

class SelectionSort implements SortArray
{

    public function sort(array $A): array
    {
        $arrayLength = count($A);

        for ($i = 1; $i < $arrayLength; $i++) {
            $maxIndex = 0;
            for ($j = 1; $j <= $arrayLength - $i; $j++) {
                if ($A[$maxIndex] < $A[$j]) {
                    $maxIndex = $j;
                }
            }

            $temp = $A[$arrayLength - $i];
            $A[$arrayLength - $i] = $A[$maxIndex];
            $A[$maxIndex] = $temp;
        }

        return $A;
    }
}