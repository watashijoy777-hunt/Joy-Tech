#include <stdio.h>

void main()
{
    char str[100];
    int i;

    printf("Enter a string: ");
    gets(str);

    for(i = 0; str[i] != '\0'; i++)
    {
        if(str[i] >= 'A' && str[i] <= 'Z')
        {
            printf("%c is Uppercase\n", str[i]);
        }
        else if(str[i] >= 'a' && str[i] <= 'z')
        {
            printf("%c is Lowercase\n", str[i]);
        }
    }
}