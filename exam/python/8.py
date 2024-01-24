f1=open("demo.txt","r")
f2=open("output.txt","w+")
lines=f1.readlines()
for i in range(0,len(lines),2):
    f2.write(lines[i])
f1.close()
f2.close()
with open('output.txt','r') as f3:
    print(f3.read())