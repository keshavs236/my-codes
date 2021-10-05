#include <stdio.h>

int main(void) {
	int t,N[1000000],i,j,tmp;
	scanf("%d",&t);
	for(i=0;i<t;i++){
	    scanf("%d",&N[i]);
	    //printf("%d\n",p);
	}
	for(i=0;i<t;i++){
	    for(j=i;j<t;j++){
	        if(N[i]>N[j]){
	            tmp=N[i];
	            N[i]=N[j];
	            N[j]=tmp;
	        }
	    }
	}
	for(i=0;i<t;i++){
	    printf("%d\n",N[i]);
	}
	return 0;
}