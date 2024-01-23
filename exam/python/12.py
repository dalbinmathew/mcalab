import csv
x=int(input("enter the column num:"))
x-=1
with open('details.csv','r') as csvfile:
    reader=csv.reader(csvfile)
    for i in reader:
        if x < 0 or x >= len(i):
            print("Invalid column number. Please enter a number between 1 and", len(i))
            break
        else:
            print(i[x])
