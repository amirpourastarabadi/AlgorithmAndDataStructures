<?php

class QuickSort implements SortArray
{
    use BeautifulArrayPrint;

    public function sort(array $A): array
    {
        $this->quick($A, 0, count($A) - 1);
        return $A;
    }

    protected function quick(array &$A, int $from, int $to)
    {
        if ($from < $to) {
            $pivotIndex = $this->choosePivot($from, $to);
            $this->swap($A, $from, $pivotIndex);
            
            $partitionIndex = $this->partition($A, $from, $to);
            
            // echo "\nend of partidion by $partitionIndex\n";
            // $this->printArray($A);
            
            // sleep(1);
            
            $this->quick($A, $from, $partitionIndex - 1);
            $this->quick($A, $partitionIndex + 1, $to);
        }
    }

    protected function partition(array &$A, int $from, int $to):int
    {

        $pivot = $A[$from];
        $temp = $from;
        
        $from = $from + 1;
        
        // echo "\n---------------------partition---------------------\n";
        // echo "partition: from: $from($A[$from]), to: $to($A[$to]), pivot:$temp($pivot)\n";
        // echo "on: ";
        // $this->printArray($A);

        while (true) {
        

            // echo "from: $from,";
            while ($from < $to && $A[$from] <= $pivot) {
                $from++;
                // echo "$from, ";
            }
            // echo "\nto: $to,";
            while ($from < $to && $A[$to] >= $pivot) {
                $to--;
                // echo "$to, ";
            }

            if ($from < $to) {
                $this->swap($A, $to, $from);
                // $this->printArray($A);
                // sleep(1);
                continue;
            }
            // sleep(1);
            break;
        }
        $this->swap($A, $temp, $from-1);

        return $from - 1 ;
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