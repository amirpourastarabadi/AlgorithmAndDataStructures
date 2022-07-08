counter = []
def fib(n):
    counter.append(1)
    if n == 1 or n == 2 : 
        return 1
    return fib(n-1) + fib(n-2)

assert fib(1) == 1
assert fib(2) == 1
assert fib(3) == 2
assert fib(4) == 3
assert fib(5) == 5
assert fib(6) == 8
assert fib(7) == 13
assert fib(8) == 21

counter = []
fib(21)
print('for fib 21', sum(counter), 'time fib function was called')
# for fib(21) '21891' times fib function called


def fib2(n):
    data = {}
    data[1] = 1
    data[2] = 1
    for i in range(3, n+1):
        data[i] = data[i-1] + data[i-2]
    
    return data[n]

# fib2 do the same work in O(n)