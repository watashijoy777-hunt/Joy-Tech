#include<stdio.h>

void main ()

{
    int num;

    printf("Enter The Number=");
    scanf("%d",&num);

    while (num>=1)
    {
        printf("%d\n",num);
        num--;
    }

    printf("%d\n",num);
    
}