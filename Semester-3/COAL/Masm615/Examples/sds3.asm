INCLUDE irvine32.inc
.data
.code
main PROC
XOR eax,eax
XOR ebx,ebx
mov ax,10101010b
mov bx,11111011b
shld ax,bx,4
call Writestring
call crlf
exit
main ENDP
END main
