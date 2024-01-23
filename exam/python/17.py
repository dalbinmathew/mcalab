class Student():
    def __init__(self, studentid,name,course,grade):
        self.studentid=studentid
        self.name=name
        self.course=course
        self.grade=grade
    def display(self):
        print(f"Student ID:{self.studentid}\nName:{self.name}\nCourse:{self.course}\nGrade:{self.grade}\n")
    def update(self):
        self.grade=input("enter new grade:")
studid=input("enter student ID:")
studname=input("enter student name:")
studcourse=input("enter Course:")
studgrade=input("enter Grade:")

stud=Student(studid,studname,studcourse,studgrade)
stud.display()
stud.update()
stud.display()