#include<stdio.h>
#include <stdlib.h>


struct node {
int data;
struct node *next;
};
struct node *head=NULL;
int size=0;

void insertbeg()
{
struct node *newnode;
newnode=(struct node*)malloc(sizeof(struct node));
newnode->next=NULL;
printf("\nenter the element");
scanf("%d",&newnode->data);
if(head==NULL)
head=newnode;
else
{
newnode->next=head;
head=newnode;
}
size++;
}


void insertend()
{
struct node *newnode;
newnode=(struct node*)malloc(sizeof(struct node));
newnode->next=NULL;
printf("\nenter the element");
scanf("%d",&newnode->data);
if(head==NULL)
head=newnode;
else
{
struct node *temp;
temp=head;
while(temp->next !=NULL)
{
temp=temp->next;
}
temp->next=newnode;
}
size++;
}


void insertatpos()
{
struct node *newnode;
newnode=(struct node*)malloc(sizeof(struct node));
newnode->next=NULL;
if(head==NULL)
printf("\nempty linked list");
else
{
printf("\nenter the position:");
scanf("%d",&pos);
if(pos<0||pos>size+1)
printf("\ninvalid position");
else
{
printf("\nenter the element:");
scanf("%d",&newnode->data);
if(pos==1)
{
newnode->next=head;
head=newnode;
}
else
{
int i=1;
struct node*temp;
temp=head;
while(i<pos-1)
{
temp=temp->next;
i++;
}
newnode->next=temp->next;
temp->next=newnode;
}
}
size++;
}
}

void deletebeg()
{
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    int d=head->data;
    temp=head;
    head=head->next;
    free(temp);
    printf("\n %d deleted",d);
}



void deletepos()
{
    int p,i,d,j;
    struct node* del;
    printf("\n Enter the position to delete:");
    scanf("%d",&p);
    j=0;
    temp=head;
    while(temp!=NULL)
    {
        temp=temp->next;
        j++;
    }
     if(p<=0|| p>j)
    {
        printf("\n Invalid Position");
        return;
    }
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    i=2;
    del=head;
    //here we stop iteration with previous node
    //temp=head
    /*while(i<p)
    {
        temp=temp->next;
        i++;
    }
    del=temp->next;
    d=del->data;
    if(p==1)
        head=del->next;
    else
        temp->next=del->next;
    */
    //here we stop iteration with deleting node
    while(i<=p)
    {
        temp=del;
        del=temp->next;
        i++;
    }
    d=del->data;
    if(p==1)
        head=del->next;
    else
        temp->next=del->next;
    free(del);
    printf("\n %d deleted",d);
}



void deleteend()
{
    int d;
    struct node* del=head;
    temp=head;
    if(head==NULL)
    {
        printf("\n Linked list is empty");
        return;
    }
    if(temp->next!=NULL)
    {
        while((temp->next)->next!=NULL)
            temp=temp->next;
        del=temp->next;
    }
    else
        head=NULL;
    d=del->data;
    temp->next=NULL;
    free(del);
    printf("\n %d is deleted",d);
}



void search()
{
    int d;
    printf("\n Enter the node to search:");
    scanf("%d",&d);
    temp=head;
    while(temp!=NULL)
    {
        if(temp->data==d)
        {
            printf("\n %d is presented in linked list",d);
            return;
        }
        temp=temp->next;
    }
    if(temp==NULL)
        printf("%d is not presented in linked list",d);
}



void display()
{
if(head==NULL)
print("\nempty linked list");
else
{
struct node *temp;
temp=head;
while(temp->next!=NULL)
{
printf("%d",temp->data);
temp=temp->next;
}
printf("%d",temp->data);
}
}



int main()
{

}
