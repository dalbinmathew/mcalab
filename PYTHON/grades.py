a=int(input("enter your marks of physics:"))
b=int(input("enter your marks of chemistry:"))
c=int(input("enter your marks of maths:"))
d=int(input("enter your marks of biology:"))
total=a+b+c+d
per=(total/400)*100
if(per>90):
  print("your grade is A")
elif(per>80):
  print("your grade is B")
elif(per>70):
  print("your grade is C")
else:
  print("you are failed")
