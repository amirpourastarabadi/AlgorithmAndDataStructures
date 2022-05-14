<?php

class QuickSort implements SortArray
{

    public function sort(array $A):array
    {
        return $this->quick($A, 0, count($A));
    }

    protected function quick(array $A, int $fromIndex, int $toIndex):array
    {
        if($fromIndex < $toIndex)
        {
            $pivotIndex = $this->choosePivot($fromIndex, $toIndex);
            $partitionIndex = $this->partition($A, $pivotIndex, $fromIndex, $toIndex);
            $A = $this->quick($A, $fromIndex, $partitionIndex);
            $A = $this->quick($A, $partitionIndex, $toIndex);
        }

        return $A;
    }

    protected function choosePivot(int $fromIndex, int $toIndex):int
    {
        return random_int($fromIndex, $toIndex);
    }

    protected function partition(array $A, int $pivotIndex, int $fromIndex, int $toIndex): int
    {
        $pivot = $A[$pivotIndex];



    }
}