def fib():
  x=int(input("enter the range:"))
  a,b=0,1
  if(x<0):
    print("enter a positive integer")
  else:
    print(a)
    print(b)
    for i in range(2,x):
      nxt=a+b
      print(nxt)
      a=b
      b=nxt
      
   
fib()
