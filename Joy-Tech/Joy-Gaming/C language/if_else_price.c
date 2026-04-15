#include<stdio.h>

void main ()

{
    int price1,price2,weight1,weight2;
    float price_per_gram1,price_per_gram2;

    printf(" \n Enter Price 1 =  \n Enter weight 1 =");
    scanf("%d %d",&price1 , &weight1);

    printf("\n Enter Price2 = \n Enter Weight2 =");
    scanf("%d %d", &price2 , &weight2);

    price_per_gram1=price1/weight1;
    price_per_gram2=price2/weight2;

    if(price_per_gram1 < price_per_gram2)
    {
        printf(" Product Is Cheaper");
    }
    else
    {
        printf("Product Is Expensive");
    }
}