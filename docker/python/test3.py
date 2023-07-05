#arr1 = list(map(int, input().split()))
arr1 = [3, 4, 5, 11, 5, 7, 12, 8, 18]
l1 = len(arr1)//2
l2 = len(arr1)
arr2 = arr1[l1::-1]
arr3 = arr1[l2:3:-1]

print(arr1)
print(arr2)
print(arr3)