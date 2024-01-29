lst=[]
x=int(input("enter how many users:"))
for i in range(x):
    dict1={}
    name=input("enter name:")
    age=input("enter age:")
    dict1["name"]=name
    dict1["age"]=age
    lst.append(dict1)
print(lst)