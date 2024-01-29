#include<stdio.h>
#define v 5
void prims(int[][]);
int minkey(int[],int[]);
void display(int[],int[][]);

int main()
{
    int i,j,a[10][10];
    printf("\nEnter adjacency matrix:\n");
    for(i=0;i<n;i++)
    for(j=0;j<n;j++)
    scanf("%d",&a[i][j]);
    prims(a)
}