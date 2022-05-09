<?php

class NaturalMergeSort implements SortArray
{
    use Merge;
    use BeautifulArrayPrint;

    public function sort(array $A): array
    {
        $indexes = $this->extractIndexes($A);
        if(count($indexes) === 2)
        {
            return $A;
        }

        $sortedArray = [];
        for($i = 0; $i < count($indexes) - 1; $i ++)
        {
            $index = $indexes[$i];
            $len = $indexes[$i + 1] - $index;
            $leftSide = array_slice($A, $index, $len);
            $sortedArray = $this->mergeTwoSortedArray($sortedArray, $leftSide);
        }

        return $sortedArray;
    }

    protected function extractIndexes(array $A):array
    {
        $indexes = [0];
        for($i = 0 ; $i < count($A) - 1; $i ++)
        {
            if($A[$i] > $A[$i+1])
            {
                $indexes[] = $i+1;
            }
        }
        $indexes[] = count($A);

        return $indexes;
    }
}