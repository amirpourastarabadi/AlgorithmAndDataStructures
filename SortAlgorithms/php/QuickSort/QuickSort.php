<?php

class QuickSort implements SortArray
{
    use BeautifulArrayPrint;
    protected static $round = 0;

    public function sort(array $A): array
    {
        return $this->quick($A, 0, count($A) - 1);
        return $A;
    }

    protected function quick(array $A, int $from, int $to)
    {
        if ($from < $to) {
            $pivot = $this->partition($A, $from, $to);
            $this->quick($A, $from, $pivot - 1);
            $this->quick($A, $pivot + 1, $to);
        }

        return $A;

    }

    protected function partition(array &$A, int $from, int $to)
    {
        static::$round ++;
        $pivotIndex = $this->choosePivot($from, $to);
        $pivot = $A[$pivotIndex];
        
        $this->swap($A, $from, $pivotIndex);
    

        $i = $from + 1;
        $j = $to;
        echo "round: ". static::$round ."    --------------------------------------\n";
        $this->printArray($A);
        echo "pivot=$pivotIndex, from=$from, to=$to";
        while(true)
        {
            echo "\ni: $i,";
            while ($i < $j && $A[$i] <= $pivot && $i < count($A)-1) {
                $i++;
                echo "$i,";
            }
    
            echo "\nj: $j,";
            while ($i < $j && $A[$j] > $pivot && $j > 0) {
                $j--;
                echo "$j,";
            }
    

            if($i < $j)
            {
                echo "\nswap: $i, $j";
                $this->swap($A, $i, $j);
                $this->printArray($A);
                continue;
            }
            echo "\nend of while\n";
            break;
        }

        $this->swap($A, $from, $i-1);
        echo "\nswap: $from, " . ($i - 1);
        $this->printArray($A);
        echo "\nreturn $i";
        echo "\n--------------------------------------\n";
        return $i;
        
    }

    private function swap(array &$A, $firstIndex, $secondIndex)
    {
        $temp = $A[$firstIndex];
        $A[$firstIndex] = $A[$secondIndex];
        $A[$secondIndex] = $temp;
    }

    protected function choosePivot(int $fromIndex, int $toIndex): int
    {
        return random_int($fromIndex, $toIndex);
    }
}
