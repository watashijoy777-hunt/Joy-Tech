#include<stdio.h>

void main ()

{
    char str[100];
    int i,vowels=0,words=1;

    printf("Enter a sentance = ");
    gets(str);

    for(i=0;str[i]!='\0';i++)

    {
         if(str[i]=='a' || str[i]=='e' || str[i]=='i' || str[i]=='o' || str[i]=='u' || str[i]=='A' || str[i]=='I' || str[i]=='O' || str[i]=='U' )

         {

            vowels++;

         }
         if(str[i]==' ')

         {
            words++;
         }

        
    }

    printf("Number of vowels =%d",vowels);
    printf("Number of words =%d",words);

   
}