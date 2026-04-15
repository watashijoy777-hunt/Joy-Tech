#include<stdio.h>

struct student
{
    int roll;
    char name[50];
    float marks;


};
void main ()
{
    struct student s1;

    printf("Enter Roll Number :");
    scanf("%d",&s1.roll);

    printf("Enter Your name :");
    scanf("%s",&s1.name);

    printf("Enter Your Marks :");
    scanf("%f",&s1.marks);


    printf("Roll Number is : %d\n",s1.roll);

    printf("name is :%s\n ",s1.name);

    printf("marks is : %f\n",s1.marks);
}