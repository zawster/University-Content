#include <stdio.h> 
#include <time.h> 
#include <stdlib.h>
#include <math.h>

double STEPS;
char* temp;
double t_time;
void func(){
	
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
	FILE *file2;
	
	
	file2 = fopen("test1.txt", "a") ;
	fprintf (file2, "%f  \n",pi);
}
int main(int argc, char *argv[]){
	clock_t start_time, end_time;
	temp = argv[1];    
	start_time = clock();
	STEPS = atoi(temp);
	for (int i = 1; i<=STEPS; i*=10)
	{
		func();
	}
	end_time = clock(); 
	t_time =((double) (end_time - start_time)) / CLOCKS_PER_SEC;
	
	FILE *file1; 
	file1 = fopen("plot1.txt", "a") ;
	fprintf (file1, "%f  %f\n",STEPS,t_time);
	
	return 0;
}

