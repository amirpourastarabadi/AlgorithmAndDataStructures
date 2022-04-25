
class BubbleSort:

    def sort(self, A):
        if not isinstance(A, list):
            raise Exception("Input A Must BE Array")
        n = len(A)

        for i in range(n, 0, -1):
            for j in range(0, i - 1):
                if(A[j] > A[j+1]):
                    A[j] , A[j+1] = A[j+1], A[j]
        return A