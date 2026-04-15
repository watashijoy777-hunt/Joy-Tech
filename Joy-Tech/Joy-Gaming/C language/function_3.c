
//With Argument and Return Value

#include<stdio.h>

int getsquare(int num)
{
    return num*num;
}
void main ()
{
    int n,sq;

    printf("Enter a number :");
    scanf("%d",&n);

    sq=getsquare(n);

    printf("square is : %d",sq);
}