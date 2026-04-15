#include<stdio.h>

union citizen
{
    char passport[8];
    char rationcard[10];
};

struct person
{
    char name[30];
    int age;
    float weight;
    char isindian;
    union citizen status;

};
void main ()
{
    struct person s1;

    printf("Enter You name : ");
    gets(s1.name);

    fflush(stdin);

    printf("Enter Your age");
    scanf("%d",&s1.age);

    printf("Enter Your weight :");
    scanf("%f",&s1.weight);

    fflush(stdin);

    printf("Is this person is Indian ( T=True and F=False)");
    scanf("%c",&s1.isindian);

    fflush(stdin);

    if(s1.isindian == 'T' || s1.isindian == 'F')
    {
            printf("What is your ration cars number :");
            gets(s1.status.rationcard);
    }
    else
    {
        printf("What is Your passport Number :");
        gets(s1.status.passport);
    }

    printf("name:%s\n age :%d\n weight:%.2f\n isindian:%c\n",s1.name,s1.age,s1.weight,s1.isindian
    
    
    );
}