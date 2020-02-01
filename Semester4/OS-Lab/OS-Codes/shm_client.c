#include <sys/types.h>
#include <sys/ipc.h>
#include <stdlib.h>
#include <sys/shm.h>
#include <stdio.h>
#define SHMSZ  27

int main(){int shmid;
	key_t key;
	char *shm, *s;
	key = 5678;
	if ((shmid = shmget(key, SHMSZ, 0666)) < 0) {
		perror("\nshmget\n");
		exit(1);
	}
	if ((shm = shmat(shmid, NULL, 0)) == (char *) -1) {
		perror("\nshmat\n");
		exit(1);
	}
	for (s = shm; *s != NULL; s++){
		putchar(' ');
		putchar(*s);
		putchar(' ');
	}
	putchar('\n');
	*shm = '*';
	shmdt(shm);
	shmctl(shmid,IPC_RMID,NULL);
	return 0;
}