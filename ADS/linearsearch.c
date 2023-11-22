#include<stdio.h>
void main()
{
int arr[5],i,n;
printf("enter 5 elements\n");
for(i=0;i<5;i++)
{
scanf("%d",&arr[i]);
}
printf("the elements are\n");
for(i=0;i<5;i++)
{
printf("%d\t", arr[i]);
}
printf("\nenter the element to be searched\n");
scanf("%d",&n);
for(i=0;i<5;i++)
{
if(arr[i]==n)
{
printf("the searched element is %d is present at the location %d", n, i+1);
break;
}
}
}

