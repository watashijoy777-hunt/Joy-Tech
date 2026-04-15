#include <stdio.h>

void main()
{
    int arr[10], i, n;

    printf("Enter how many numbers: ");
    scanf("%d", &n);

    printf("Enter the numbers:\n");

    for(i = 0; i < n; i++)
    {
        scanf("%d", &arr[i]);
    }

    printf("\nEven numbers are:\n");
    for(i = 0; i < n; i++)
    {
        if(arr[i] % 2 == 0)
        {
            printf("%d ", arr[i]);
        }
    }

    printf("\nOdd numbers are:\n");
    for(i = 0; i < n; i++)
    {
        if(arr[i] % 2 != 0)
        {
            printf("%d ", arr[i]);
        }
    }
}