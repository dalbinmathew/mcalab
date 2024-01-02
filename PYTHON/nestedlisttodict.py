lst = [[1, 2, 3], ["a", "b", "c"]]
thisdict={}
p=0
for i in lst[0]:
        thisdict[i]=lst[1][p]
        p +=1
print(thisdict)