#include<stdio.h>

void main ()
{
    float weight[10]={1.2,1.3,1.4,1.5,1.6,1.7,1.8,1.9,2.0,2.8};
    float search;
    int i;

    printf("\n Search The Fractional Number:");
    scanf("%f",&search);


    for(i=0;i<=9;i++)
    {
        if(search==weight[i])
        {
        printf(" Number Found at %d position",i+1);
        break;
        }
    }
    if(i==10)
    {
        printf("Value not found");
    }
    
}