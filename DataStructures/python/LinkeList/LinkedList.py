from contextlib import nullcontext


class Node:

    def __init__(self, data=None) -> None:
        self.data = data
        self.next = None
        self.prev = None

class LinkeList:

    def __init__(self) -> None:
        self.head = Node()
        self.tail = Node()

        self.head.next = self.tail
        self.tail.prev = self.head

        self.length = 0

    def append(self, node):
        pass

    def push(self, node):
        pass

    def pop(self):
        pass

    def shift(self):
        pass

    def insert(self, index, node):
        pass

    def get(self, index):
        pass

    def length(self):
        pass

    def isEmpty(self):
        pass