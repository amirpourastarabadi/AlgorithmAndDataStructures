<?php

interface RandomArrayInterface {
     public function make(int $length, int $min, int $max):array;
 }