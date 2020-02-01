#include<iostream>
using namespace std;

void Merge(int *A,int *B,int* C,int siz){
	
	int j=0,k=0;
	int x=siz/2;
	for (int i=0 ; i<siz ; i++){
		if (j!=x && k!=x){
			if (A[j] < B[k]){
				C[i]=A[j];
				j+=1;
			}
			else if (A[j] > B[k]){
				C[i]=B[k];
				k+=1;
			}
			else if(A[j] == B[k]){
				C[i]=A[j];
				j+=1;
				i+=1;
				C[i]=B[k];
				k+=1;
			}
		}
		else if(j==x && k!=x){
			C[i] = B[k];
			k+=1;
		}
		else if(k==x && j!=x){
			C[i] = A[j];
			j+=1;
		}
		else if (k==x && j==x){
			break;
		}
	}
	for (int i = 0; i < siz; ++i)
	{
		cout<<C[i]<<" ";	} cout<<endl;
}
int main(){
	int A[]={7,8,9,10,12};
	int B[]={1,2,4,4,6};
	int z=sizeof(A)/sizeof(A[0]);
	z=z+z;
	int* C=new int[z];
	Merge(A,B,C,z);
	z=z/2;
	cout<<"The medians are "<<C[z-1]<<" and "<<C[z]<<endl;
	return 0;
}