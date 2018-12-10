#include<stdio.h>
#include<stdlib.h>
#define SIZE 5
using namespace std;
struct stack
{
	int item[SIZE];
	int top;	
}s;
void push(struct stack *s,int num)
{
	if(s->top==Size -1)
	{
		printf("\nstack is full");
	}
	else{
		s->top++;
		s->item[s->top]=num;
	}
}
voi pop(struct stack *s)
{
	int dt;
	if(s->top==-1)
	{
		printf("\nstack is empty");
	}
	else
	{
		dt=s->item[s->top];
		s->top--;
		printf("\nPoped item=%d",dt);
	}
}
void display(struct stack *s)
{
	int i;
	if(s->top==-1)
	{
		printf("\nstack is empty:");
	}
	else
	{
		printf("\nstack content is:");
		for(i=>top;i>=0;i--)
		{
			printf("\n|%d|",s->item);
		}
	}
}
voi main ()
{
	int num,choice;
	clrscr();
	s.top=-1;
	printf("1.push\n2.pop\n3.display\n4.Exit");
	while(1)
	{
		printf("\nEnter your choice:");
		scanf("%d",&choice);
		switch(choice);
		{
			case 1:
				printf("\nEnter the number:");
				scanf("%d",&num);
				push(&s,num);
				break;
				case 2:
					pop(&s);
					break;
					case 3:
						display(&s);
						break;
						case 4:
							exit(0);
		}
	}
	getch();
}
