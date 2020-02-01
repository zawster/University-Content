Include irvine32.inc

.data
msgStr BYTE "if with Logical OR is executed",0
val1 DWORD ?
val2 DWORD ?
val3 DWORD ?
X BYTE 	?

.code
main PROC
	call readstring
	mov val1, eax
	
	call readstring
	mov val2,eax
	
	call readstring
	mov val3,eax
	
	mov eax, val1
	cmp eax, val2
	
	ja L1			;Jump if above i.e. if (val1 > val2)
		mov eax, val2
		cmp eax, val3	;compare val2 with val3
		
		jbe next
		
	L1:	mov X, 1
		mov edx, OFFSET msgStr
		call WriteString
		call Crlf
	next:
		
exit
main ENDP
END main
