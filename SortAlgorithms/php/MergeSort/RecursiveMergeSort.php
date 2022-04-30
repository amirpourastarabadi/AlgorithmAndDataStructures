<?php

class RecursiveMergeSort implements SortArray
{

    public function sort(array $A): array
    {

        if (count($A) > 1)
        {
            echo "\nA: ";
            $this->printArray($A);
            $mid = intVal(count($A) / 2);
            $leftSide = array_slice($A, 0, $mid);
            $rightSide = array_slice($A, $mid, count($A));
            echo "\nleftSide: ";
            $this->printArray($leftSide);
            echo "\nrightSide: ";
            $this->printArray($rightSide);
            $this->sort($leftSide);
            $this->sort($rightSide);

            $i = $j = $k = 0;

            while ($i < count($leftSide) && $j < count($rightSide))
            {
                if($leftSide[$i] <= $rightSide[$j])
                {
                    $A[$k] = $leftSide[$i];
                    $i += 1;
                    echo "\nA(leftSide $i): ";
                    $this->printArray($A);
                }
                else{
                    $A[$k] = $rightSide[$j];
                    $j += 1;
                    echo "\nA(rightSide $j): ";
                    $this->printArray($A);
                }
                $k += 1;
            }
            while ($i < count($leftSide))
            {
                $A[$k] = $leftSide[$i];
                $i += 1;
                $k += 1;
                echo "\nA(leftSide $i): ";
                $this->printArray($A);
            }
            while ($j < count($rightSide))
            {
                $A[$k] = $rightSide[$j];
                $j += 1;
                $k += 1;
                echo "\nA(rightSide $j): ";
                $this->printArray($A);
            }
        }

        return $A;
    }

    public function printArray(array $arr)
    {
        echo "\n[" . implode(',', $arr) . "]\n" ;
    }
}