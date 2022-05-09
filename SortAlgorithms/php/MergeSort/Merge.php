<?php

trait Merge
{
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

}