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
        return $this->size === 0;
    }

    public function isFull()
    {
        return $this->size === $this->capacity;
    }

    public function enQueue($item)
    {
        if($this->isFull())
        {
            throw new OverflowException('queue is full');
        }

        $this->rear = ($this->rear += 1) % $this->capacity;

        $this->queue[$this->rear] = $item;
        $this->size += 1;
    }

    public function deQueue()
    {
        if($this->isEmpty())
        {
            throw new Exception('queue is empty');
        }

        $item = $this->queue[$this->front];
        $this->front = ($this->front += 1) % $this->capacity;
        $this->size -= 1;
        return $item;

    }

    public function getFront()
    {
        return $this->queue[$this->front];
    }

    public function getRear()
    {
        return $this->queue[$this->rear];
    }

    public function getSize()
    {
        return $this->size;
    }

    public function __toString()
    {
        $output = '';
        foreach ($this->queue as $item) {
            $output .= $item ? "$item" :  "null";
            $output .= " ";
        }
        return $output . "\n";
    }
}

$queue = new Queeu(3);


echo $queue;
$queue->enQueue(1);


$queue->enQueue(2);
echo $queue;


$queue->enQueue(3);
echo $queue;

try{
    $queue->enQueue(1);

}catch(Exception $e){
    echo $e->getMessage();
    echo PHP_EOL;
}


echo $queue->deQueue() . "\n";
$queue->enQueue(10);
echo $queue;


echo $queue->deQueue() . "\n";
echo $queue;       

try{
    echo $queue->deQueue() . "\n";
    echo $queue->deQueue() . "\n";
    echo $queue->deQueue() . "\n";
    
}catch(Exception $e)
{
    echo $e->getMessage();
    echo PHP_EOL; 
}

$queue->enQueue(100);
$queue->enQueue(200);
echo $queue;
echo 'front = ' . $queue->getFront() . "\n";
echo 'rear = ' . $queue->getRear() . "\n";
echo 'size = ' . $queue->getSize() . "\n";






