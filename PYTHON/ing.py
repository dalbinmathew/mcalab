str1=input("enter string")
x=str1[-3:]
if x == "ing":
    str1=str1+"ly"
else:
    str1=str1+"ing"
print(str1)

