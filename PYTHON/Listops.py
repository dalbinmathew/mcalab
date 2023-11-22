lst1=[1,2,3,4]
lst2=[4,5,3,6,7]
lst3=[]
if(len(lst1)==len(lst2)):
  print("length of the lists are same")
else:
  print("length of the lists are not same")

sum1=0
sum2=0
for i in lst1:
  sum1=sum1+i
for i in lst2:
  sum2=sum2+i
if(sum1==sum2):
  print("both list sums to the same value")
else:
  print("both list sums to the different value")


for i in range(len(lst1)):
  for j in range(len(lst2)):
    if(lst1[i]==lst2[j]):
      lst3.append(lst1[i])
print("these values are common in both lists:\n", lst3)
