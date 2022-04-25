import random


class Sort:
    def sort(self, A):
        pass

class BubbleSort (Sort):

    def sort(self, A):
        if not isinstance(A, list):
            raise Exception("Input A Must BE Array")
        steps = 0
        n = len(A)

        for i in range(n, 0, -1):
            for j in range(0, i - 1):
                steps += 1
                if(A[j] > A[j+1]):
                    A[j] , A[j+1] = A[j+1], A[j]
        print("A sorted in %s steps" %steps)
        return A

A = list(range(10, 1, -1))
random.shuffle(A)

print(A)

b = BubbleSort()
print(b.sort(A))

