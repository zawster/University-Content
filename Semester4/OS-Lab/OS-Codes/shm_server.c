
#include <sys/types.h>
#include <stdlib.h>
#include <sys/ipc.h>
#include <sys/shm.h>
#include <stdio.h>
#define SHMSZ  27
void main()
{	char c;int shmid;
	key_t key;
	char *shm, *s;
	key = 5678;
	if ((shmid = shmget(key, SHMSZ, IPC_CREAT | 0666)) < 0) {
		perror("\nshmget\n");
		exit(1);
	}
	if ((shm = shmat(shmid, NULL, 0)) == (char *) -1) {
		perror("\nshmat\n");
		exit(1);
	}
	s = shm;
	for (c = 'a'; c <= 'z'; c++){
		*s++ = c;
	}
	*s = NULL;
	while (*shm != '*'){
		sleep(1);
	}
	exit(0);
}