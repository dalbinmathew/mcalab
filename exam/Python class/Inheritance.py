#Parent Class
class Person:
    def __init__(self,fName,lName):
        self.fname = fName
        self.lname = lName
#Child Class
class Student(Person):
    def __init__(self, fName, lName,year):
        super().__init__(fName, lName)
        self.graduationYear = year
    def greeting(self):
        print(f"Hello {self.fname} {self.lname} of year: {self.graduationYear}")

#child class 2
class Staff(Person):
    def __init__(self, fName, lName,roll):
        super().__init__(fName, lName)
        self.roll = roll
    def greeting2(self):
        print(f"Hello {self.fname} {self.lname} of year: {self.roll}")
x = Student("Anand","Nair",2022)
y = Staff("Shijin","C","Clerk")
x.greeting()
y.greeting2()