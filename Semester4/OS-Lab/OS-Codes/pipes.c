#include <unistd.h>
int main(){
	int pid; // for storing fork() return
	int pfd[2];

	char aString[20]; // Temporary storage
	pipe(pfd);

	pid = fork(); // create child process
	if (pid == 0) // For child
	{
		write(pfd[1], "Hello", 5); // Write onto pipe
		close(pfd[0]);
	}
	else // For parent
	{
		read(pfd[0], aString, 5); // Read from pipe
		printf("%s\n",aString );
		close (pfd[1]);
	}
	return 0;
}