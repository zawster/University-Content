Include Irvine32.inc
.data
.code
main PROC
Mov eax,556h
mov ebx,eax
call dumpregs

ADD eax,ebx
call dumpregs

MOV ebx,800h
MOV eax,700h
SUB ebx,eax
call dumpregs

MOV eax,3h
MOV ebx,3h
MUL ebx
call dumpregs

MOV eax,3h
MOV ebx,3h
DIV ebx
call dumpregs

MOV al,3h
MOV ah,7h
ADD al,ah
call dumpregs
exit
main ENDP
END main

