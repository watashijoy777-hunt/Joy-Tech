#include<stdio.h>

void main ()

{
    char name[30],address[600];

    printf("Enter Name: ");
    scanf("%s",name);

    printf("Enter your address : ");
    gets(address);

    // display
    printf("name=%s",name);
    printf(address);
    puts(address);


}