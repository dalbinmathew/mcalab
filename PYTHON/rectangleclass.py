class Rectangle:
    def __init__(self, length, breadth):
        self.length = length
        self.breadth = breadth

    def area(self):
        return self.length * self.breadth

    def perimeter(self):
        return 2 * (self.length + self.breadth)

    def comparearea(self, other_rectangle):
        if self.area() < other_rectangle.area():
            print("rectangle1 is smaller than rectangle2")
        elif self.area() > other_rectangle.area():
            print("rectangle1 is bigger than rectangle2")
        else:
            return "Area is equal"


rectangle1 = Rectangle(5, 6)
rectangle2 = Rectangle(7, 5)


print("Area of rectangle1:", rectangle1.area())
print("Perimeter of rectangle1:", rectangle1.perimeter())

print("Area of rectangle2:", rectangle2.area())
print("Perimeter of rectangle2:", rectangle2.perimeter())

result = rectangle1.comparearea(rectangle2)



