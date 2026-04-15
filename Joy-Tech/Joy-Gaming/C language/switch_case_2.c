#include<stdio.h>

void main ()
{
    char letter;

    printf("Enter The letter :");
    scanf("%c",&letter);

    switch(letter)
    {
        case 'a' :
        case 'A' :
            printf("It is Vovel");
            break;
        
        case 'e' :
        case 'E' :
            printf("It is Vovel");
            break;

        case 'i' :
        case 'I' :
            printf("It is Vovel");
            break;

        case 'o'  :
        case 'O'  :
            printf("It is Vovel");
            break;
        
        case 'u'  :
        case 'U'  :
            printf("It is Vovel");
            break;

        default :
            printf("It Is Not Vovel");
            break;
    }
}