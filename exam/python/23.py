with open('demo.txt','r') as f1:
    lines=f1.readlines()
with open('new.txt','w') as f2:
    for i in range(0,len(lines),2):
        f2.write(lines[i])
f2.close()
f1.close()
with open('new.txt','r') as f3:
    for i in f3:
        print(i)
f3.close()