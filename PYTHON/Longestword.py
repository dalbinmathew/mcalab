def longestword(lst):
  longest=lst[1]
  for i in lst:
    current=i
    if len(current)>len(longest):
        longest=current
  print("length of the longest word in the list is",len(longest))
  
  
x=int(input("enter how many words you want to enter"))
print("enter the words")
lst=[]
for i in range(x):
  ele=input()
  lst.append(ele)
  
  
longestword(lst)