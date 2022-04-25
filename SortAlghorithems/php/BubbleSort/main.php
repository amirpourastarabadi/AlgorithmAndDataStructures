<?php

interface SortArray{
    public function sort(array $A):array; 
}

interface RandomArray
{
    public function make(int $length, int $min, int $max):array;
}

class RandomArrayMaker implements RandomArray
{
    protected array $output = [];

    public function make(int $length, int $min, int $max):array
    {
        for($i = $length; $i > 0; $i--)
        {
            $this->output[] = random_int($min, $max);
        }

        return $this->output;
    }
}

class BubbleSort implements SortArray
{
    public function sort(array $A):array
    {
        $steps = 0;
        for($i = count($A)-1; $i > 0; $i--)
        {
            for($j = 0; $j < $i; $j ++)
            {
                $steps += 1;
                if($A[$j] > $A[$j + 1])
                {
                    $temp = $A[$j+1];
                    $A[$j+1] = $A[$j];
                    $A[$j] = $temp; 
                }
            }
        }
        echo "\n$steps\n";
        return $A;
    }
}

$b = new BubbleSort();
$r = new RandomArrayMaker();

$A = $r->make(9, 1, 10);
$A = $b->sort($A);
var_dump($A);