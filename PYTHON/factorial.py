def fact(x):
  fact=1
  for i in range(1,x+1):
    fact*=i
  print("factorial=",fact)

fact(5)
