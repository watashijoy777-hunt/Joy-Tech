#include <stdio.h>

void  main() 
{
    float cp, sp, amount;

   
    printf("Enter Cost Price: ");
    scanf("%f", &cp);
    
    printf("Enter Selling Price: ");
    scanf("%f", &sp);

    if (sp > cp) 
    {
        amount = sp - cp;
        printf("Profit = %.2f\n", amount);
    } 
    else if (cp > sp)
    {
        amount = cp - sp;
        printf("Loss = %.2f\n", amount);
    } 
    else 
    {
        printf("No Profit and No Loss\n");
    }

    
}
    
   