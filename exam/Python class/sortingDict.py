people = {2:"c",1:"d",3:"a",4:"b"}
print(people)
 # Sort by key
print(dict(sorted(people.items())))


 # Sort by value
print(dict(sorted(people.items(), key=lambda item: item[1])))

