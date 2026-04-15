//  With Return Value  and No Argument

#include<stdio.h>

int getpi()
{
    int pi=3;
    return pi;

}
void main ()
{
    int radius,area,pi;

    printf("Enter area of circle :");
    scanf("%d",&radius);

    pi=getpi();

    area=(pi*radius*radius)/7;

    printf("The area of circle is :%d",area);


}