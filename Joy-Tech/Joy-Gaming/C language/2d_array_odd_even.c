#include <stdio.h>

void main()
{
    int a[3][3];
    int i, j;

    printf("Enter 9 numbers:\n");

    // Input numbers
    for(i = 0; i < 3; i++)
    {
        for(j = 0; j < 3; j++)
        {
            scanf("%d", &a[i][j]);
        }
    }

    printf("\nEven numbers are:\n");

    for(i = 0; i < 3; i++)
    {
        for(j = 0; j < 3; j++)
        {
            if(a[i][j] % 2 == 0)
            {
                printf("%d ", a[i][j]);
            }
        }
    }

    printf("\n\nOdd numbers are:\n");

    for(i = 0; i < 3; i++)
    {
        for(j = 0; j < 3; j++)
        {
            if(a[i][j] % 2 != 0)
            {
                printf("%d ", a[i][j]);
            }
        }
    }
}