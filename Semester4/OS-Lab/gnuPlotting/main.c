#include <stdio.h> 
#include <math.h> 
#include <stdlib.h>
#include <time.h>
#include <string.h> 
int main(int argc, char *argv[]){
	
	double total_time;
	clock_t start, end;
	start = clock();
	//  executin time startn from  here
	char* temp;
	temp = argv[1];    // Number of Steps 
	double STEPS = atoi(temp);	// conversion of command line argument(string to double/int)

	int i, count = 0;
	double x, y, z, pi;
	for (i = 0; i <= STEPS; i++)  {
		x = rand()/(double)RAND_MAX;
		y = rand()/(double)RAND_MAX; 
		z = x*x + y*y;
		if (z <= 1) 
			count++;
	}
	pi = (double)count/STEPS*4;
//	File
	FILE *file1,*file2 ; 
	file1 = fopen("file1.txt", "a") ;
	file2 = fopen("file2.txt", "a") ;
	//double abs_error,abs_relative_error;
	//abs_error =fabs( pi-acos(-1));
	//abs_relative_error = fabs(pi-acos(-1))/abs(acos(-1));
	//printf("\nN = %d\t", STEPS);

//	printf("Pi = %.20f\n", pi);

	end = clock();
	//time count stops 
	total_time =((double) (end - start)) / CLOCKS_PER_SEC;
	//printf("\t\t\tTotal Time : %f\n\n",total_time);

	//printf("Absolute Error = %f\t",abs_error);
	//printf("Absolute Relative Error = %f\n",abs_relative_error);

	if(file1 != NULL){
		fprintf (file1, "%f %f\n",STEPS,total_time);
	}
	double arch=acos(-1);
	if(file2 != NULL){
	 	fprintf (file2, "%f %f\n",pi,arch);
	}
}
