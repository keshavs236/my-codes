#include <stdio.h>

struct soldiers{
    int c,l[2],I;
};
struct soldiers *s;
int t,n,m,k,Sp=0,Mi=0,Ti=0,li[11]={0};

void Correct(int x){
    int j,y;
    y=s[x].c;
    li[y]=1;
    //printf("%d %d %d\n",x,s[x].I,s[x].c);
    s[x].I=0;
    Sp++;
    y=s[x].l[0];
    if(s[y].I!=0){
        s[y].I--;
        y=s[x].l[1];
        if(s[y].I!=0){
            s[y].I--;
        }
    }
    for(j=0;j<n;j++){
        if(s[j].l[0]==x||s[j].l[1]==x){
            if(s[j].I!=0){
                s[j].I--;
            }
            break;
        }
    }
}

int main(void) {
	int x,u,v,i,j;
	scanf("%d",&t);
	while(t>0){
	    Sp=0; Mi=0; Ti=0; li[11]={0}; X=0;
	    t--;
	    x=0; Sp=0; Mi=0; Ti=0;
	    scanf("%d%d%d",&n,&m,&k);
	    struct soldiers S[n+1];
	    s=S;
	    for(i=1;i<=n;i++){
	        scanf("%d",&s[i].c);
	        s[i].l[0]=0;
	        s[i].l[1]=0;
	        s[i].I=1;
	    }
	    s[0].I=0;
	    for(i=1;i<=n;i++){
	        for(j=1;j<=n;j++){
	            if(x+1==s[j].c){
	                x++;
	                break;
	            }
	        }
	        if(x==k){
	            break;
	        }
	    }
	    
	    for(i=1;i<=m;i++){
	        scanf("%d%d",&u,&v);
	        
	        if(s[u].l[0]==0){
	            s[u].l[0]=v;
	            s[u].I++;
	        }
	        else {
	            s[u].l[1]=v;
	            s[u].I++;
	        }
	    }
	    if(x!=k||n==1){
	        printf("-1\n");
	        continue;
	    }
	    
	    for(i=3;i>0;i--){
	        for(j=2;j<=n;j++){
	            if(s[j].I==i&&!li[s[j].c]){
	                Ti+=s[j].I;
	                Correct(j);
	            }
	        }//printf("%d\n",Sp);
	    }
	    for(i=3;i>0;i--){
	        for(j=2;j<=n;j++){
	            if(s[j].I==i){
	                Ti+=s[j].I;
	                Correct(j);
	            }
	        }//printf("%d\n",Sp);
	    }
	    
	   /* for(i=1;i<=k;i++){
	        if(!li[i]){
	        for(j=0;j<n;j++){
	            if((s[j].a==i)&&(s[j].I>Mi)){
	                Mi=s[j].I;
	                x=j;
	            }
	        }
	        Ti+=Mi;
	        Mi=0;
	        //printf("%d\n",x);
	        Correct(x);
            }
	    }*/
	    
	    /*for(i=1;i<=k;i++){
	        printf("%d\n",li[i]);
	        if(!li[i])
	            Sp++;
	    }*/
	    //printf("%d ",Ti);
	    printf("%d\n",Sp);
	}
	return 0;
}
