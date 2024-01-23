class Time:
    def __init__(self,h,m,s):
        self.h=h
        self.m=m
        self.s=s
    def __add__(self,other):
        h=self.h+other.h 
        h=h%12
        m=self.m+other.m
        if(m>60):
            h+=1
            m=m%60
        s=self.s+other.s
        if(s>60):
            m+=1
            s=s%60
        print (f"{h}:{m}:{s}")
x,y,z=map(int,input("enter time 1 in HH:MM:SS format:").split(":"))
a,b,c=map(int,input("enter time 2 in HH:MM:SS format:").split(":"))

t1=Time(x,y,z)
t2=Time(a,b,c)

t1+t2