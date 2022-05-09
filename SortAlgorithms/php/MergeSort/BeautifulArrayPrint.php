<?php

trait BeautifulArrayPrint
{
    public function printArray(array $arr)
    {
        echo "\n[" . implode(',', $arr) . "]\n";
    }
}