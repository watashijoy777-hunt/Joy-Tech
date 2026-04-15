#include<stdio.h>

void main ()

{
         int array[3][3]={{4,6,7},{8,10,4}};
         int i,j,sum=0;

          for(i=0;i<=2;i++)
        {
            for(j=0;j<=2;j++)
            {
               sum=sum+array[i][j];
            }
             printf("\n");
        }
        printf("The array of Sum Is : %d",sum);
       

}
 
