import csv

# with open("university_records.csv","r") as file1:
file1 = open("university_records.csv","r")
    
csvFile =  csv.reader(file1)
for i in csvFile:
    print(i)
      