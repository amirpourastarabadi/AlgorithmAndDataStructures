from random import random

class Node:
    def __init__(self, value):
        self.value = value
        self.parent = None
        self.left = None
        self.right = None
        self.searchCounter = 0

    def __str__(self) -> str:
        parent = self.parent.value if self.parent else 'no parent'
        left_child = self.left.value if self.left else 'no left child'
        right_child = self.right.value if self.right else 'no right child'

        return f"value: %s\nparen: %s\nleft child: %s\nright child: %s" \
            % (self.value, parent, left_child, right_child)


class Tree:
    def __init__(self):
        self.root = None
        pass

    def print_in_order(self, node):
        if node == None:
            return
        self.print_in_order(node.left)
        print(node)
        self.print_in_order(node.right)

    def print_pre_order(self):
        pass

    def prinr_post_order(self):
        pass

    def search(self, value, node):
        self.searchCounter += 1
        if self.root == None or node == None: 
            return False
        
        if value == node.value: 
            return True

        if value > node.value: 
            return self.search(value, node.left)

        if value < node.value: 
            return self.search(value, node.right)

    def insert(self, root, node):
        if root == None:
            self.root = node
            return
        if node.value >= root.value:
            if root.left == None:
                root.left = node
                node.parent = root
                return
            self.insert(root.left, node)
        else:
            if root.right == None:
                root.right = node
                node.parent = root
                return
            self.insert(root.right, node)


for i in range(20):
    nodes = [Node(int(random() * 100)) for i in range(10000)]
    # print(values)
    tree = Tree()

    for node in nodes:
        tree.insert(tree.root, node)

    maximum = 1
    tree.searchCounter = 0
    founded = tree.search(int(random() * 1000), tree.root)
    if(maximum < tree.searchCounter): maximum = tree.searchCounter

    print(maximum, founded)