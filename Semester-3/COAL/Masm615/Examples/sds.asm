INCLUDE irvine32.inc
.data 
hell BYTE "                              INTEGER+ARITHMATIC  ",0
.code 
main PROC
mov edx,OFFSET hell
call WriteString
call crlf
call crlf
call crlf
XOR eax,eax
XOR ebx,ebx
mov al,88h
rcl al,1
call WriteDec
call crlf
rcl al,1
call WriteDec
call crlf
rcr al,1
call WriteDec
call crlf
exit
main ENDP
END main