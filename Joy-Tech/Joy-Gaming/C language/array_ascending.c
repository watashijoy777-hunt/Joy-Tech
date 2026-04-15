#include<stdio.h>

void main ()
{
    int a[5]={50,40,30,20,10};
    int b[5];
    int top,bottom;

    for(top=0,bottom=4;top<=4;top++,bottom--)
    {
        b[top]=a[bottom];
    }

    for(int i=0;i<=4;i++)
    {
        printf("%d\t",a[i]);
    }

    printf("\n");

    for(int i=0;i<=4;i++)
    {
        printf("%d\t",b[i]);
    }
}