class SelectionSort:
    def sort(self, A):

        array_length = len(A)

        for i in range(1, array_length):
            max_index = 0
            for j in range(1, array_length - i + 1):
                if A[max_index] < A[j]:
                    max_index = j
            A[max_index], A[array_length - i] = A[array_length - i], A[max_index]
        return A