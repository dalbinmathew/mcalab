import csv
with open('details.csv','r') as csvfile:
    reader=csv.reader(csvfile)
    for i in reader:
        print(i)