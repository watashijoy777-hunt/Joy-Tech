#include<stdio.h>

void main ()
{
        int array[2][2]={{2,3},{4,5}};
        int i,j;

        for(i=0;i<=1;i++)
        {
            for(j=0;j<=1;j++)
            {
                printf("The 2D Array is :  %d\t",array[i][j]);
            }
             printf("\n");
        }
       

}