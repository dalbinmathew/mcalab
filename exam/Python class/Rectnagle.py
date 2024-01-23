class Rectangle:
    
    def __init__(self,length,breadth):
        self.length = length
        self.breadth = breadth
        

    def findArea(self):
        return(self.length * self.breadth)
    
    def __gt__ (self,other):
        return(self.findArea()>other.findArea())
            

x = int(input("Enter a value"))


ob1 = Rectangle(x,100)
ob2 = Rectangle(10,50)

print(f"{ob1.findArea()}")
print(f"{ob2.findArea()}")

if(ob1>ob2):
    print("1 greater than 2")
else:
    print("2 Greater than 1")



