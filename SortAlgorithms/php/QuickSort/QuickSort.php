<?php

class QuickSort implements SortArray
{
    use BeautifulArrayPrint;

    public function sort(array $A): array
    {
        return $this->quick($A, 0, count($A) - 1);
    }

    protected function quick(array $A, int $from, int $to): array
    {
        if ($from < $to) {
            $pivotIndex = $this->choosePivot($from, $to);
            $A = $this->swap($A, $from, $pivotIndex);
            [$A, $partitionIndex] = $this->partition($A, $pivotIndex, $from, $to);
            echo "end of partidion by $partitionIndex\n";
            sleep(1);
            $A = $this->quick($A, $from, $partitionIndex - 1);
            $A = $this->quick($A, $partitionIndex + 1, $to);
        }

        return $A;
    }

    protected function partition(array $A, int $pivotIndex, int $from, int $to): array
    {
        $pivot = $A[$pivotIndex];
        $from = $from + 1;
        while (true) {
            echo "\n---------------------partition---------------------\n";

            echo "partition: from: $from($A[$from]), to: $to($A[$to]), pivot:$pivotIndex($pivot)\n";

            echo "from: ";
            while ($from < $to && $A[$from] <= $pivot) {
                $from++;
                echo "$from, ";
            }
            echo "\nto:";
            while ($from < $to && $A[$to] >= $pivot) {
                $to--;
                echo "$to, ";
            }

            if ($from < $to) {
                $A = $this->swap($A, $to, $from);
                $this->printArray($A);
                sleep(1);
                continue;
            }
            sleep(1);
            break;
        }
        $this->swap($A, $to - 1, $pivotIndex);

        return [$A, $to - 1];
    }

    private function swap(array $A, $firstIndex, $secondIndex)
    {
        $temp = $A[$firstIndex];
        $A[$firstIndex] = $A[$secondIndex];
        $A[$secondIndex] = $temp;
        echo "\n---------------------swap---------------------\n";
        echo "swap: $firstIndex<->$secondIndex\n";
        $this->printArray($A);
        return $A;
    }

    protected function choosePivot(int $fromIndex, int $toIndex): int
    {
        return random_int($fromIndex, $toIndex);
    }
}