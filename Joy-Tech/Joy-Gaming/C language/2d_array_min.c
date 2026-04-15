#include<stdio.h>

void main()
{
    int a[2][3] = {{6,7,2},{3,4,5}};
    int i,j,min;

    min = a[0][0];

    for(i=0;i<=1;i++)
    {
        for(j=0;j<=2;j++)
        {
            if(a[i][j] < min)
            {
                min = a[i][j];
            }
        }
    }

    printf("The Smallest Number is : %d", min);
}