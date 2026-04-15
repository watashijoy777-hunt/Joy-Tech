#include<stdio.h>

void main()

{
    int num1,num2,choice;
    float result;

    printf("Enter num1=");
    scanf("%d",&num1);

    printf("Enter num2=");
    scanf("%d",&num2);

    printf("1. addition 2. Substraction 3. Multiplication 4. Division");

    printf("Enter Your Choice=");
    scanf("%d",&choice);

    switch(choice)
    {

    case 1:
        result = num1 + num2;
        break;

    case 2:
        result = num1 - num2;
        break;

    case 3:
        result = num1 * num2;
        break;

    case 4:
        result = num1 / num2;
        break;

    default:
        printf("Invlid Choice");
        break;
    }

    if (choice >= 1 && choice <= 4)
    {
        printf("Result = % .2f ", result);
    }
}
