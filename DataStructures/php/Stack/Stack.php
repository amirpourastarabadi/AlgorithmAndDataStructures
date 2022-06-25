<?php

class Stack
{
    public int $top = -1;

    public function __construct()
    {
        $this->stack = [];
        
    }

    public function push($value)
    {
        $this->top ++;
        
        $this->stack[] = $value;
    }

    public function pop()
    {
        if($this->isEmpty())
        {
            throw new Exception('Stack is empty');
        }

        $top = $this->stack[$this->top];
        unset($this->stack[$this->top]);

        $this->top --;

        return $top;
    }

    public function top()
    {
        return $this->stack[$this->top];
    }

    public function isEmpty()
    {
        return $this->size() <= 0;
    }

    public function size()
    {
        return count($this->stack);
    }
}

$stack = new Stack();
echo 'stack size: ' . $stack->size() . PHP_EOL;

try{
    $stack->pop();
}catch(Exception $e)
{
    echo $e->getMessage() . PHP_EOL;
}

$stack->push(1);
echo 'stack size: ' . $stack->size() . PHP_EOL;
$stack->push(2);
echo 'stack size: ' . $stack->size() . PHP_EOL;
echo 'stack top: ' . $stack->top() . PHP_EOL;
$top = $stack->pop();
echo 'stack pop: ' . $top . PHP_EOL;
echo 'stack top: ' . $stack->top() . PHP_EOL;
echo 'stack size: ' . $stack->size() . PHP_EOL;
echo 'stack pop: ' . $stack->pop() . PHP_EOL;
if($stack->isEmpty()){
    echo "stack is Empty Now" . PHP_EOL;
}
