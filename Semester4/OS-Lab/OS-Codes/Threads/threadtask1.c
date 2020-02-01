#include <stdio.h> 
#include <pthread.h> 
#include <time.h>
int arr1[10]={5,3,8,0,5,2,3,0,3,5};
int arr2[10]={10,15,3,5,7,3,11,12,0,1};
void *kidfunc(int *p) {
	for (int i = 0; i < 10; ++i)
		{
			arr2[i]=arr1[i]+arr2[i];
		}	
 	

 }
 void test(){
 	for (int i = 0; i < 10; i++){
 		printf("%d\n",arr2[i]);
 	}
 }
 int main () {
 	clock_t tic=clock();


  	pthread_t kid ;
  	
  		 pthread_create (&kid, NULL, kidfunc,NULL) ;
  
  	clock_t toc =  clock();
  	double etime=(double)(toc-tic)/CLOCKS_PER_SEC;

    test();


    printf ("Estimate Time is  %f seconds :\n", etime) ;
 	pthread_join (kid, NULL) ;
 	 printf ("No more kid!\n") ;
}