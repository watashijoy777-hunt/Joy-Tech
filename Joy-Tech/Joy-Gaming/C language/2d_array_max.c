#include<stdio.h>

void main ()

{
        int a[2][3]={{6,7},{3,4,5,}};
        int i,j,max;

        max=a[0][0];
        
        for(i=0;i<=1;i++)
        {
            for(j=0;j<=2;j++)
            {
                if(a[i][j]> max)
                {
                     max=a[i][j];
                }
              
            }

            printf("The Largest Number is : %d",max);
        }
        
}