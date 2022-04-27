class RecursiveMergeSort:

    def sort(self, A):

        if len(A) > 1:
            mid = int (len(A) / 2)
            A_I = A[0: mid]
            A_II = A[mid:]
            self.sort(A_I)
            self.sort(A_II)
            return self.__merge(A_I, A_II)
        else:
            return A[0]


    def __merge(self, A, B):
        i, j = 0, 0
        C = []

        while i < len(A) and j < len(B):
            if A[i] <= B[j]:
                C.append(A[i])
                i += 1
            else:
                C.append(B[j])
                j += 1

        while i < len(A):
            C.append(A[i])
            i += 1

        while j < len(B):
            C.append(B[j])
            j += 1

        return C
