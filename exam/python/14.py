class Rectangle:
    def __init__(self,length,breadth):
        self.length=length
        self.breadth=breadth
    def area(self):
        return self.length*self.breadth
    def __gt__(self,other):
        return self.area()>other.area()
rectangle1=Rectangle(5,10)
rectangle2=Rectangle(5,20)
if rectangle1>rectangle2:
    print("1 is bigger than 2")
else:
    print("2 is bigger than 1")