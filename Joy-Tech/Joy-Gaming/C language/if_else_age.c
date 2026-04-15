#include<stdio.h>

void main()
{

        int age;

        printf("\n Enter The Age");
        scanf("%d",&age);

        if(age>19 && age<35)
        {
            printf("\n The person is eligible for civil services");
        }
        else{
            printf(" the person is not  eligible for civil services");
        }
  
}

