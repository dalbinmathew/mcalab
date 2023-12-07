class Rectangle:
	def __init__(self, length, width):
		self.__length = length
		self.__width = width
	def area(self):
		return self.__length * self.__width
	def comparearea(self, otherrectangle):
		if self.area() < otherrectangle.area():
			print ("rectangle1 is smaller than rectangle2")
		elif otherrectangle.area() < self.area():
			print ("rectangle1 is bigger than rectangle2")
		else:
			print ("both rectangle have same area")	
	def __lt__(self, otherrectangle):
			return self.area() < otherrectangle.area()	    

rectangle1 = Rectangle(10, 6)
rectangle2 = Rectangle(7, 5)

print("Area of rectangle1:", rectangle1.area())
print("Area of rectangle2:", rectangle2.area())

cmp = rectangle1.comparearea(rectangle2)

if rectangle1 < rectangle2:
    print("rectangle1 is smaller than rectangle2")
else:
    print("rectangle1 is bigger than rectangle2")
