#include <stdio.h>
int main()
{
	int list[100],n,i,key;
	printf("How many elements?");
	scanf("%d",&n);
	printf("\nEnter %d elements of list:",n);
	for(i=0;i<n;i++)
	scanf("%d",&list[i]);
	printf("\nEnter Search Key:");
	scanf("%d",&key);
	binary_search(list,n,key);
	return 0;
}
void binary_search(int list[],int n,int key)
{
	int i,l=0,h=n-1,mid;
	for(i=0;i<n;i++)
	{
		mid=(l+h)/2;
		if(key<list[mid])
		h=mid-1;
		if(key>list[mid])
		l=mid+1;
		if(key==list[mid])
		{
        printf("The search result is found in location %d",mid+1);
        break;
    }
		if(l>h)
		{
			printf("Key doesn't exist");
			break;
			}	
	}
}

