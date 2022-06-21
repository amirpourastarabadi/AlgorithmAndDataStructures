class Queue:

    def __init__(self, capacity) -> None:
        self.queue = [None for _ in range(capacity)]
        self.size = 0
        self.capasity = capacity
        self.front = 0
        self.rear = capacity - 1  
    
    def is_full(self):
        return self.size == self.capasity

    def is_empty(self):
        return self.size == 0

    def enqueue(self, item):
        if self.is_full():
            return "over flow"

        self.rear = (self.rear + 1) % self.capasity
        self.queue[self.rear] = item
        self.size += 1

    def dequeue(self):
        if self.is_empty():
            return "empty"
        
        output = self.queue[self.front]
        self.queue[self.front] = None
        self.front = (self.front + 1) % self.capasity
        self.size -= 1
        return output

    def get_front(self):
        return self.queue[self.front]

    def get_rear(self):
        return self.queue[self.rear]
    
    def get_size(self):
        return self.size


queue = Queue(3)
assert queue.get_size() == 0

queue.enqueue(5)
print(queue.queue)

assert queue.get_size() == 1
assert queue.get_front() == 5
assert queue.get_rear() == 5

queue.enqueue(6)
print(queue.queue)

assert queue.get_size() == 2
assert queue.get_front() == 5
assert queue.get_rear() == 6

queue.enqueue(7)
print(queue.queue)

assert queue.get_size() == 3
assert queue.get_front() == 5
assert queue.get_rear() == 7
assert queue.is_full() == True
assert queue.enqueue(8) == "over flow"

assert queue.dequeue() == 5
print(queue.queue)
assert queue.get_size() == 2

queue.enqueue(15)
print(queue.queue)
assert queue.get_size() == 3

assert queue.dequeue() == 6
print(queue.queue)
assert queue.dequeue() == 7
print(queue.queue)
assert queue.dequeue() == 15
print(queue.queue)
assert queue.is_empty() == True



    
