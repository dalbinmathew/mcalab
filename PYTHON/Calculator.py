n1= int(input("enter first no."))
n2= int(input("enter second no."))
c= int(input("enter your choice: \n1.Addition\n2.Sub\n3.Division\n4.Mul\n"))
while(c>0 and c<5):
        if(c==1):
            print("sum=", n1+n2)
            break
        elif(c==2):
            print("sub=", n1-n2)
            break
        elif(c==3):
            print("div=", n1/n2)
            break
        elif(c==4):
            print("mul=", n1*n2)
            break
          