<?php

class QuickSort implements SortArray
{
    use BeautifulArrayPrint;

    public function sort(array $A): array
    {
        $leftSide = []; $rightSide = [];

        if (count($A) < 2) {
            return $A;
        }

        $pivot_key = key($A);
        $pivot = array_shift($A);
        foreach ($A as $val) {
            if ($val <= $pivot) {
                $leftSide[] = $val;
            } elseif ($val > $pivot) {
                $rightSide[] = $val;
            }
        }
        return array_merge($this->sort($leftSide), array($pivot_key => $pivot), $this->sort($rightSide));
    }

  
}
