import random

# test BubbleSort
from BubbleSort.BubbleSort import BubbleSort

A = list(range(10, 1, -1))
random.shuffle(A)
print(A)
b = BubbleSort()
print(b.sort(A))


