class QuickSort:
    
    def sort(self, A):

        if len(A) < 2 :
            return A
        
        pivot = A[0]
        leftSide = [i for i in A[1:] if i <= pivot]
        rightSide = [i for i in A[1:] if i > pivot]

        return self.sort(leftSide) + [pivot] + self.sort(rightSide)