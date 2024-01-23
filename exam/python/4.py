x=input("enter the num:")
count=0
for i in x:
    count += 1
    if i == "-":
        count -= 1
    if i == ".":
        count -= 1 
print("total no. of digits=",count)  
