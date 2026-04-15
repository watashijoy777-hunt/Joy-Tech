#include<stdio.h>

void main ()
{

    int num,multiplier,answer;

    printf("\n Enter the Number :");
    scanf("%d",&num);

    multiplier=1;

    while(multiplier<=10)
    {
        answer=num*multiplier;

        printf(" %d*%d =%d\n",num,multiplier,answer);
        multiplier++;
        
    }

}