<?php

require_once "RandomArrayInterface.php";

class RandomArray implements RandomArrayInterface
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
