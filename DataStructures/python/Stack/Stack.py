from enum import Flag
from mechanize import Item


class Stack:
    def __init__(self) -> None:
        self.stack = [];
        self.top = 0

    def pop(self):
        if self.is_empty():
            return None

        self.top -= 1
        return self.stack.pop()
        
    def push(self, value):
        self.top += 1
        self.stack.append(value)

    def top(self):
        return self.stack[self.top]

    def size(self):
        return len(self.stack)

    def is_empty(self):
        return self.top <= 0

stack = Stack();
assert stack.is_empty() == True
assert stack.pop() == None
assert stack.size() == 0


stack.push(1)
assert stack.is_empty() == False
assert stack.size() == 1
assert stack.pop() == 1
assert stack.size() == 0

stack.push(1)
stack.push(2)
assert stack.is_empty() == False
assert stack.size() == 2
assert stack.pop() == 2
assert stack.size() == 1
assert stack.is_empty() == False
assert stack.pop() == 1
assert stack.size() == 0