#include<stdio.h>

union data
{
    int i;
    float f;
    char c;

}d;

void main ()
{
    d.i=10;

    printf("Integer value = %d\n",d.i);

    d.f=5.5;

    printf("Float vlaue = %.2f\n",d.f);

    d.c='A';
    printf("char value = %c",d.c);
}