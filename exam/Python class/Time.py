class Time:
    def __init__(self,h,m,s):
        self.h = h
        self.m = m
        self.s = s
    
    def __add__(self,other):
        h = self.h + other.h
        h = h%12
        m = self.m + other.m
        if(m > 60):
            m = m % 60
            h = h+1
        s = self.s + other.s
        if(s > 60):
            s = s % 60
            m = m+1

        print(f"{h}:{m}:{s}")

# print(x,y,z)
# print(type(x))
        
x,y,z = [int(x) for x in input("Enter First time Separated by ':' ").split(":")]
a,b,c = [int(x) for x in input("Enter Second time Separated by ':' ").split(":")]

ob1 = Time(x,y,z)
ob2 = Time(a,b,c)

ob1 + ob2
