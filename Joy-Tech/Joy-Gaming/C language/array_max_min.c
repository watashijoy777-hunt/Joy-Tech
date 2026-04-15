#include<stdio.h>

void main()

{
    int a[10],i,n;
    int max,min;

    printf("Enter  number of elements = ");
    scanf("%d", &n);
    
    printf("Enter %d number :\n ",n);

    for( i=0;i<n;i++);
    {
    
        scanf("%d",&a[i]);
    }
    
    max = a[0];
    min= a[0];
    
    for(i=1;i<n;i++)
    {
        if(a[i] > max)
        {
            max = a[i];
        }
        if(a[i] < min)
        {
            min = a[i];
        }
    }
    
    printf("Largest Number is = %d\n",max);
    printf("Smallest Number Is = %d\n",min);
}