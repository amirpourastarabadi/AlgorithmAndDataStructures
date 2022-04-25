class InsertionSort:

    def sort(self, A):
        if not isinstance(A, list):
            raise Exception("Input A Must BE Array")

        for i in range(1, len(A)):
            tmp = A[i]
            j = i - 1
            while j >= 0 and A[j] > tmp:
                A[j+1] = A[j]
                j -= 1
            A[j+1] = tmp

        return A

