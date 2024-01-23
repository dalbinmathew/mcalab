n1=int(input("enter first num:"))
n2=int(input("enter second num:"))
l1=[]
l2=[]
for i in range(1,n1+1):
    if n1%i==0:
        l1.append(i)
for i in range(1,n2+1):
    if n2%i==0:
        l2.append(i)
l3=[]
for i in l1:
    for j in l2:
        if i==j:
            l3.append(i)
print("gcd=",max(l3))