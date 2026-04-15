#include <stdio.h>

void main()
{
    char str[100];
    int i;
    int characters = 0, digits = 0, spaces = 0;

    printf("Enter a string: ");
    gets(str);

    for(i = 0; str[i] != '\0'; i++)
    {
        if(str[i] >= '0' && str[i] <= '9')
        {
            digits++;
        }
        else if(str[i] == ' ')
        {
            spaces++;
        }
        else
        {
            characters++;
        }
    }

    printf("Characters = %d\n", characters);
    printf("Digits = %d\n", digits);
    printf("Spaces = %d\n", spaces);
}