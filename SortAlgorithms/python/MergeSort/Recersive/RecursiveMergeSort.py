class RecursiveMergeSort:

    def sort(self, A):

        if len(A) > 1:
            mid = len(A) // 2
            leftHalf = A[0: mid]
            rightHalf = A[mid:]
            self.sort(leftHalf)
            self.sort(rightHalf)

            i, j, k = 0, 0, 0

            while i < len(rightHalf) and j < len(leftHalf):
                if rightHalf[i] <= leftHalf[j]:
                    A[k]= rightHalf[i]
                    i += 1

                else:
                    A[k] = leftHalf[j]
                    j += 1

                k += 1

            while i < len(rightHalf):
                A[k] = rightHalf[i]
                k += 1
                i += 1

            while j < len(leftHalf):
                A[k] = leftHalf[j]
                k += 1
                j += 1


        return A