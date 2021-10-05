#include <stdio.h>

int fact(int n,int f[]){
    int i,flag=0;
    while(n>0){
    for(i=flag;i>=0;i--){
        f[i]*=n;
        if(f[i]%10000000!=0){
            f[i+1]+=f[i]/10000000;  //printf("%d %d %d %d\n",f[2],f[1],f[0],n);
            if(f[flag+1]%10000000!=0){
                flag++;
            }
            f[i]=f[i]%10000000;
        }
        else{
            break;
        }
    }
    n--;
    }
    return flag;
}

void print_fact(int p, int f[]){
    int i;
    for(i=p;i>=0;i--){
        printf("%d",f[i]);
        f[i]=0;
    }
    printf("\n");
}

int main(void) {
	int t,n,f[25]={0},p;
	scanf("%d",&t);
	while(t>0){
	    f[0]=1;
	    scanf("%d",&n);
	    p=fact(n,f);
	    //printf("%d\n",p);
	    print_fact(p,f);
	    t--;
	}
	return 0;
}

