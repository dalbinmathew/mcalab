#include<stdio.h>
#include<stdlib.h>
void main()
{
    int n;
    printf("enter the no of vertices:");
    scanf("%d",&n);
    int visited[n],A[n][n], e=0,min=999,cost=0,u,v;
    printf("enter adjacency matrix:");
    for(int i=0;i<n;i++)
    {
        visited[i]=0;
        for(int j=0;j<n;j++)
        {
            scanf("%d",&A[i][j]);
            if(A[i][j]==0)
            {
                A[i][j]=999;
            }
            if(A[i][j]<min)
            {
                min=A[i][j];
                u=i;
                v=j;
            }
        }
    }
    cost+=min;
    visited[u]=1;
    visited[v]=1;
    e+=1;
    while(e<n-1)
    {
        min=999;
        for(int i=0;i<n;i++)
        {
            if(visited[i]==1)
            {
                for(int j=0;j<n;j++)
                {
                    if(A[i][j]<min && visited[j]==0)
                    {
                        min=A[i][j];
                        u=i;
                        v=j;
                    }
                    
                }
            }
        }
    cost+=min;
    visited[u]=1;
    visited[v]=1;
    e+=1;
    }
    printf("cost:%d",cost);
}