INCLUDE Irvine32.inc
.data
	
.code
main proc
	
	call dumpregs
	mov eax, 0
	call dumpregs
	push eax
	
	add eax, 23
	call dumpregs
	pop eax
	call dumpregs
exit
main endp
end main