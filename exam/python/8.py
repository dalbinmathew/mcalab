f1=open("demo.txt","r")
f2=open("output.txt","w+")
lines=f1.readlines()
for i in range(0,len(lines),2):
    f2.write(lines[i])
print(f2.read())
f1.close()
f2.close()