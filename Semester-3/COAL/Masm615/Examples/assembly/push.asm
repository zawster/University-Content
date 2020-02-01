INCLUDE Irvine32.inc
.data
	msg BYTE "this is time",0
.code
main PROC
	mov ecx, lengthof msg
	dec ecx
	
	mov esi, offset msg
	
L1:
	push [esi]
	inc esi
	loop L1

	mov ecx, lengthof msg
	dec ecx
L2:
	pop [esi]
	mov eax, [esi]
	call writechar
	dec esi
	loop L2
exit
main ENDP
END main