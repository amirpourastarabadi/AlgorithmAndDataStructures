<?php

class RecursiveMergeSort implements SortArray
{
    use Merge;
    public function sort(array $A): array
    {

        if (count($A) > 1) {
            $mid = intVal(count($A) / 2);
            $leftSide = array_slice($A, 0, $mid);
            $rightSide = array_slice($A, $mid, count($A));
            $leftSide = $this->sort($leftSide);
            $rightSide = $this->sort($rightSide);

            return $this->mergeTwoSortedArray($leftSide, $rightSide);
        }

        return $A;
    }

    public function printArray(array $arr)
    {
        echo "\n[" . implode(',', $arr) . "]\n";
    }
}