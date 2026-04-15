#include <stdio.h>

void main () 
{
    float p, r, t, si;

    printf("Enter principal Amount =");
    scanf("%f",&p);
    
    printf("Enter Rate of Interest =");
    scanf("%f",&r);
     
    printf("Enter Time=");
    scanf("%f",&t);
    
    
    
  
    si = (p * r * t) / 100;
    
    printf("Simple Interest = %.2f\n", si);
    
}