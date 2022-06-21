from contextlib import nullcontext


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
        pass

    def shift(self):
        pass

    def insert(self, index, node):
        pass

    def get(self, index):
        pass

    def len(self):
        return self.length

    def isEmpty(self):
        return self.length == 0
    

linkeList = LinkedList()

assert linkeList.length == 0
linkeList.append(Node('append'))
assert linkeList.length == 1
print('length =', linkeList.len())

assert linkeList.length == 1
linkeList.push(Node('push'))
assert linkeList.length == 2
print('length =', linkeList.len())