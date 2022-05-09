<?php

class RecursiveMergeSort implements SortArray
{

    public function sort(array $A): array
    {

        if (count($A) > 1) {
            $mid = intVal(count($A) / 2);
            $leftSide = array_slice($A, 0, $mid);
            $rightSide = array_slice($A, $mid, count($A));
            $leftSide = $this->sort($leftSide);
            $rightSide = $this->sort($rightSide);

            return $this->mergeTwoSortedArray($A, $leftSide, $rightSide);
        }

        return $A;
    }

    public function mergeTwoSortedArray(array $main, array $leftSide, array $rightSide): array
    {
        $i = $j = $k = 0;

        while ($i < count($leftSide) && $j < count($rightSide)) {
            if ($leftSide[$i] <= $rightSide[$j]) {
                $A[$k] = $leftSide[$i];
                $i += 1;
            } else {
                $A[$k] = $rightSide[$j];
                $j += 1;
            }
            $k += 1;
        }
        while ($i < count($leftSide)) {
            $A[$k] = $leftSide[$i];
            $i += 1;
            $k += 1;
        }
        while ($j < count($rightSide)) {
            $A[$k] = $rightSide[$j];
            $j += 1;
            $k += 1;
        }


        return $A;
    }

    public function printArray(array $arr)
    {
        echo "\n[" . implode(',', $arr) . "]\n";
    }
}