class Rectangle:
    def __init__(self, length, breadth):
        self.__length = length
        self.__breadth = breadth

    def area(self):
        return self.length * self.breadth

    def __lt__(self, other):
        return self.area() < other.area()

# Create two rectangle objects
rectangle1 = Rectangle(5, 3)
rectangle2 = Rectangle(7, 6)

# Compare the rectangles based on their area
if rectangle1 < rectangle2:
    print("rectangle1 is smaller than rectangle2")
else:
    print("rectangle1 is bigger than rectangle2")
