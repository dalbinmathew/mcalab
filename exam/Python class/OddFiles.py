file1 = open("numbers.txt","r")

file2 = open("output.txt","w")

lines = file1.readlines();

for i in range(0,len(lines),2):
    file2.write(lines[i])
file1.close()
file2.close()

file3 = open("output.txt","r")

print(file3.readlines())

