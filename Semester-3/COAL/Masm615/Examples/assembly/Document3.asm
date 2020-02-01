include irvine32.inc 
.data	
string byte "*",0
string1 byte "=",0
var byte ?
.code
main proc
xor eax,eax
xor ebx,ebx
xor ecx,ecx
mov ebx,1
mov ecx,10
mov al,1
L:
call writedec
inc al
mov var,al
xor edx,edx
mov edx,offset string
call writestring
xor eax,eax
mov eax,2
call writedec
xor edx,edx
mov edx,offset string1
call writestring
mov eax,2
mul ebx
call writedec
inc ebx 
call crlf 
xor eax,eax
mov al,var
loop L
exit
main endp
end main
