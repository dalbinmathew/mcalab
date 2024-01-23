class Rectangle:
    def __init__(self,l,b):

        self.length = l
        self.breadth = b

    def printParam(self,name):
        print("Parameters are : ",self.length,self.breadth,name)

    def findArea(self):
        print("Area := ",self.length*self.breadth)
        


#syntax for creating object
obj = Rectangle(10,5)
obj.printParam("Amith")
# obj.findArea()