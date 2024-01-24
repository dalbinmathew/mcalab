dict1={"anandan":22,"syam":23,"dalbin":20}

x=max(sorted(dict1.values()))
print(x)
for i in dict1:
    if dict1[i]==x:
        y=i
print(y)

print(dict(sorted(dict1.items())))
print(dict(sorted(dict1.items(), reverse=True)))