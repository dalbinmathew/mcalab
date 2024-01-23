import csv
dict1=[{'brand':'toyota','model':'corolla'},{'brand':'mercedes','model':'s class'}]
fields=['brand','model']

with open('details.csv','w',newline='') as csvfile:
    writer=csv.DictWriter(csvfile, fieldnames=fields)
    writer.writeheader()
    writer.writerows(dict1)
with open('details.csv','r') as csvfile:
    reader=csv.reader(csvfile)
    for i in reader:
        print(i)