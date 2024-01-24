class Bankaccount:
    def __init__(self,accno,accname,acctype,balance):
        self.accno=accno
        self.accname=accname
        self.acctype=acctype
        self.balance=balance
    def deposit(self,amount):
        self.balance=self.balance+amount
    def withdraw(self,amount):
        if amount>self.balance:
            print("insufficient funds")
        else:
            self.balance=self.balance-amount
    def display(self):
        print(f"ACCOUNT HOLDER NAME:{self.accname}\nACCOUNT NO.:{self.accno}\nACCOUNT TYPE:{self.acctype}\nBALANCE:{self.balance}")
accountno=input("enter account no:")
accountname=input("enter account holder name:")
accounttype=input("enter account type:")
accountbalance=int(input("enter balance:"))
acc=Bankaccount(accountno,accountname,accounttype,accountbalance)
print("Choose any one of the operations below ")
print("-----------------\n 1.Deposit \n 2.Withdraw \n 3.Display \n 4.Exit")
while 1:
    ch=int(input("\n Enter any one of the operations : "))
    if ch==1:
        am=int(input("\n Enter the amount to be deposited : "))
        acc.deposit(am)
        print("\n The details of deposit is : ")
        acc.display()
    elif ch==2:
        am=int(input("\n Enter the amount to be withdrawn : "))
        acc.withdraw(am)
    elif ch==3:
        print("\n The accountdetails are : ")
        acc.display()
    elif ch==4:
        exit()
    else:
        print("Not A Valid Choice")

