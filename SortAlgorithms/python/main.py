import random

# test BubbleSort
# from BubbleSort.BubbleSort import BubbleSort
# print("-------------BUBBLE SORT-------------")
# A = list(range(10, 1, -1))
# random.shuffle(A)
# print(A)
# b = BubbleSort()
# print(b.sort(A))


# test InsertionSort
# from InsertionSort.InsertionSort import InsertionSort
# print("-------------INSERTION SORT-------------")
# A = list(range(10, 1, -1))
# random.shuffle(A)
# print(A)
# i = InsertionSort()
# print(i.sort(A))


# test SelectionSort
# from SelectionSort.SelectionSort import SelectionSort
# print("-------------SELECTION SORT-------------")
# A = list(range(10, 1, -1))
# random.shuffle(A)
# print(A)
# i = SelectionSort()
# print(i.sort(A))


# test SelectionSort
from MergeSort.Recersive.RecursiveMergeSort import RecursiveMergeSort
print("-------------RECURSIVE MERGE SORT-------------")
A = list(range(5, 1, -1))
random.shuffle(A)
print(A)
i = RecursiveMergeSort()
print(i.sort(A))
