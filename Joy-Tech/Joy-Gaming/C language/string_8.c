#include <stdio.h>

void main()
{
    char str[100];
    int i, length = 0;

    printf("Enter a string: ");
    gets(str);

    // find length of string
    for(i = 0; str[i] != '\0'; i++)
    {
        length++;
    }

    printf("Reverse string is: ");

    // print string in reverse
    for(i = length - 1; i >= 0; i--)
    {
        printf("%c", str[i]);
    }
}