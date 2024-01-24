str=input("enter sentence:")
x=str.split()
longest=x[0]
for i in x:
    if len(i)>len(longest):
        longest=i
print(longest,"\n",len(longest))