x=int(input('enter year:'))
if x%400==0 or x%4==0:
    print("leap year")
else:
    print("not leap year")