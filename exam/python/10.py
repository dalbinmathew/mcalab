import csv
dict1=[{'name':'alan', 'branch':'cs','cgpa':'8.84'},{'name':'bibin', 'branch':'eee','cgpa':'7.50'}]
fields=['name','branch','cgpa']

with open('details.csv','w', newline='') as csvfile:
    writer = csv.DictWriter(csvfile,fieldnames=fields)
    writer.writeheader()
    writer.writerows(dict1)

with open('details.csv','r') as csvfile:
    reader = csv.reader(csvfile)
    for i in reader:
        print(i)

csvfile.close()
