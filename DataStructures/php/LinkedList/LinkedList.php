<?php

class Node
{
    public $data;
    public ?Node $next;
    public ?Node $prev;

    public function __construct($data)
    {
        $this->data = $data;
        $this->next = null;
        $this->prev = null;
    }
}

class LinkedList
{
    public Node $head;
    public Node $tail;
    public int $length = 0;

    public function __construct()
    {
        $this->head = new Node(null);
        $this->tail = new Node(null);

        $this->head->next = $this->tail;
        $this->tail->prev = $this->head;
    }

    public function append(Node $node)
    {
        $node->prev = $this->tail->prev;
        $node->prev->next = $node;
        $this->tail->prev = $node;
        $node->next = $this->tail;

        $this->length++;
    }

    public function push(Node $node)
    {
        $node->next = $this->head->next;
        $this->head->next = $node;
        $node->prev = $this->head;
        $node->next->prev = $node;

        $this->length++;
    }

    public function pop()
    {
        if ($this->length > 0) {
            $this->tail->prev->prev->next = $this->tail;
            $this->tail->prev = $this->tail->prev->prev;
            $this->length--;
        }
    }

    public function shift()
    {
        if($this->length > 0)
        {
            $this->head->next = $this->head->next->next;
            $this->head->next->prev = $this->head;
            $this->lenght --;
        }
    }

    public function insert(int $index, Node $node)
    {
    }

    public function remove(int $index)
    {
        if($index > $this->length)
        {
            return "index out of range";
        }

        $target = $this->getNode($index);

        $target->next->prev = $target->prev;
        $target->prev->next = $target->next;
        $this->length --;
    }

    public function get(int $index)
    {
        return $this->getNode($index)->data;
    }

    private function getNode(int $index)
    {
        if ($index > $this->length) {
            return "index out of range";
        }

        $item = $this->head;
        for ($i = 0; $i < $index; $i++) {
            $item = $item->next;
        }

        return $item;
    }

    public function length()
    {
        return $this->length;
    }

    public function isEmpty()
    {
        return $this->length() === 0;
    }
}

$list = new LinkedList();
echo "list lenght 0 = " . $list->length();
echo PHP_EOL;

$list->append(new Node(20));
echo "list lenght 1 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 20 = " . $list->get(1);
echo PHP_EOL;

$list->append(new Node(30));
echo "list lenght 2 = " . $list->length();
echo PHP_EOL;
echo "list second Node data 30 = " . $list->get(2);
echo PHP_EOL;

$list->pop();
echo "list lenght 1 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 20 = " . $list->get(1);
echo PHP_EOL;
echo "list second Node not exist = " . $list->get(2);
echo PHP_EOL;

$list->push(new Node('amir'));
echo "list lenght 2 = " . $list->length();
echo PHP_EOL;
echo "list first Node data amir = " . $list->get(1);
echo PHP_EOL;
echo "list second Node 20 = " . $list->get(2);
echo PHP_EOL;

$list->push(new Node(696));
echo "list lenght 3 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 696 = " . $list->get(1);
echo PHP_EOL;
echo "list second Node amir = " . $list->get(2);
echo PHP_EOL;
echo "list third Node 20 = " . $list->get(3);
echo PHP_EOL;

$list->remove(2);
echo "list lenght 2 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 696 = " . $list->get(1);
echo PHP_EOL;
echo "list second Node 20 = " . $list->get(2);
echo PHP_EOL;

$list->append('append');
echo "list lenght 3 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 696 = " . $list->get(1);
echo PHP_EOL;
echo "list second Node 20 = " . $list->get(2);
echo PHP_EOL;
echo "list third Node append = " . $list->get(3);
echo PHP_EOL;

$list->shift();
echo "list lenght 2 = " . $list->length();
echo PHP_EOL;
echo "list first Node data 20 = " . $list->get(1);
echo PHP_EOL;
echo "list second Node append = " . $list->get(2);

