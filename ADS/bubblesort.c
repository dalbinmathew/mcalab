#include<stdio.h>
void main()
{
int arr[20],s,i,j,t;
printf("enter the size of array\n");
scanf("%d",&s);
printf("enter the elements of array\n");
for(i=0;i<s;i++)
scanf("%d",&arr[i]);
for(i=0;i<s;i++)
{
for(j=i+1;j<s;j++)
{
if(arr[i]>arr[j])
{
t=arr[i];
arr[i]=arr[j];
arr[j]=t;
}
}
}
printf("sorted array\n");
for(i=0;i<s;i++)
printf("%d",arr[i]);
}
