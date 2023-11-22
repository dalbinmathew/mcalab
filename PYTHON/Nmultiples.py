a=int (input("enter the number: "))
n=int (input("enter how many multiples of " +str(a)+ " you need:"))
c=1
while(c<n+1):
   print (str(a) + "*" + str(c) +"=" +str((a*c)))
   c=c+1
