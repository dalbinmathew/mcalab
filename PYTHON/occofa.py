lst=["dalbin","sandra","anandan"]
count=0

for i in range(len(lst)):
  for j in lst[i]:
    if 'a' in j:
      count+=1

print(count)
  
