lst1=[1,2,3,4]
lst2=[4,5,3,6,7]
lst3=[]
for i in lst1:
  for j in lst2:
    if(i==j):
      lst3.append(i)
print("these values are common in both lists:\n", lst3)