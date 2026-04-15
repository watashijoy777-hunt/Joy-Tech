//No Return Value And With Argument

#include<stdio.h>

void showtable(int num)


{
    int i;

    for(i=1;i<=10;i++)
    {
        printf("%d*%d=%d\n",num,i,num*i);
    }
}
void main ()
{
    int n;

    printf("enter A number :");
    scanf("%d",&n);

    showtable(n);
}