INCLUDE Irvine32.inc
.data

.code
main PROC
mov ah,20
mov ax,30
add ah,ax

call writedec

	exit
main ENDP
END main