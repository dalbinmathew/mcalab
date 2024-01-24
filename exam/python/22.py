dict1={}
x=int(input("enter how many users:"))
for i in range(x):
    
    name=input("enter name:")
    amount=input("enter bid amount:")
    dict1[name]=amount
    
x=max(sorted(dict1.values()))
for i in dict1:
    if dict1[i]==x:
        y=i
print(y,"is the winner")