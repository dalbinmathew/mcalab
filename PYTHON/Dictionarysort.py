dict={"anandan":22,"syam":23,"dalbin":20}

x=max(sorted(dict.values()))
print(x)
for i in dict:
    if dict[i]==x:
        y=i
print(y)
print(sorted(dict.items(), reverse=True))