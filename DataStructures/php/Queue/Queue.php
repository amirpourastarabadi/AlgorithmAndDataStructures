<?php

class Queeu
{

    private int $capacity;
    private int $size;
    private int $front;
    private int $rear;
    private array $queue;

    public function __construct(int $capacity)
    {
        $this->capacity = $capacity;
        $this->size = 0;
        $this->front = 0;
        $this->rear = $capacity - 1;
        $this->setQueue();
    }

    private function setQueue()
    {
        for ($i = 0; $i < $this->capacity; $i++) {
            $this->queue[] = null;
        }
    }

    public function isEmpty()
    {
    }

    public function isFull()
    {
    }

    public function enQueue($item)
    {
    }

    public function deQueue()
    {
    }

    public function getFront()
    {
    }

    public function getRear()
    {
    }

    public function getSize()
    {

    }

    public function __toString()
    {
        $output = '';
        foreach($this->queue as $item)
        {
            $output .= $item ? "$item" :  "null";
            $output .= " ";
        }
        return $output . "\n";
    }
}

$queue = new Queeu(3);

echo $queue;