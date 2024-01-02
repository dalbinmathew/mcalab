a=int(input("enter the number: "))
n=int(input("enter how many multiples of " +str(a)+ " you need:"))
for i in range(1,n+1):
   print (str(a) + "*" + str(i) +"=" +str(a*i))
