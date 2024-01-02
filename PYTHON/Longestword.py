def longestword(lst):
  longest=lst[1]
  for i in lst:
    if len(i)>len(longest):
        longest=i
  print("length of the longest word in the list is",len(longest))
  
  
lst=list(map(str,input("enter the elements:").split()))
longestword(lst)