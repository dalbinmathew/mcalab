def factors(num):
  lst=[]
  for i in range(1,num+1):
    if num%i==0:
      lst.append(i)
  print(lst)   
  
factors(19)  