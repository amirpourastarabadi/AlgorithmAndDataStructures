from contextlib import nullcontext
from operator import length_hint


class Node:

    def __init__(self, data=None) -> None:
        self.data = data
        self.next = None
        self.prev = None

class LinkedList:

    def __init__(self) -> None:
        self.head = Node()
        self.tail = Node()

        self.head.next = self.tail
        self.tail.prev = self.head

        self.length = 0

    def append(self, node):
        node.next = self.tail
        node.prev = self.tail.prev
        self.tail.prev = node
        node.prev.next = node
        self.length += 1

    def push(self, node):
        node.prev = self.head
        node.next = self.head.next
        self.head.next = node
        node.next.prev = node
        self.length += 1

    def pop(self):
        if self.length < 1:
            return None
        self.tail.prev.prev.next = self.tail
        self.tail.prev = self.tail.prev.prev
        self.length -= 1

    def shift(self):
        if self.length < 1:
            return None

        self.head.next.next.prev = self.head
        self.head.next = self.head.next.next

        self.length -= 1

    def insert(self, index, node):

        if index == 1:
            return self.push(node)
        
        if index == self.length:
            return self.append(node)

        if 0 >= index > self.length:
            return None

        target = self.head
        for _ in range(index):
            target = target.next
        
        node.next = target
        node.prev = target.prev
        target.prev = node
        node.prev.next = node

        self.length += 1


    def get(self, index):
        if index <= 0 or index > self.length:
            return None

        target = self.head

        for _ in range(index):
            target = target.next
        
        return target.data

    def len(self):
        return self.length

    def isEmpty(self):
        return self.length == 0
    
    def __str__(self) -> str:
        
        node = self.head.next
        output = "["
        for _ in range(self.length):
            sep = '' if _ == self.length -1 else ", "
            output += node.data + sep
            node = node.next
        output += ']'

        return output

linkeList = LinkedList()

assert linkeList.length == 0
linkeList.append(Node('append'))
assert linkeList.length == 1
print('length =', linkeList.len())
assert linkeList.get(1) == "append"
print('get first =', linkeList.get(1))
print(linkeList)
print('*' * 100)

assert linkeList.length == 1
linkeList.push(Node('push'))
assert linkeList.length == 2
print('length =', linkeList.len())
assert linkeList.get(1) == "push"
assert linkeList.get(2) == "append"
print('get first =', linkeList.get(1))
print(linkeList)
print('*' * 100)

linkeList.pop()
assert linkeList.length == 1
assert linkeList.get(1) == "push"
print('length =', linkeList.len())
print(linkeList)
print('*' * 100)

linkeList.shift()
assert linkeList.length == 0
print('length =', linkeList.len())
print(linkeList)
print('*' * 100)

linkeList.insert(1, Node('insert 1'))
assert linkeList.length == 1
assert linkeList.get(1) == "insert 1"
linkeList.insert(1, Node('insert 2'))
print('length =', linkeList.len())
assert linkeList.get(1) == "insert 2"
assert linkeList.get(2) == "insert 1"
assert linkeList.length == 2
print(linkeList)
print('*' * 100)