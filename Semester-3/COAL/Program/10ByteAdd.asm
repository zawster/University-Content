Include Irvine32.inc 

.data 
	var1 TBYTE 0AABBBBCCCCDDDDEEFFFFh
	var2 TBYTE 0AABBBBCCCCDDDDEEFFFFh
	res TBYTE ?
.code
	main proc
	xor eax,eax
	xor ebx, ebx
	xor ecx, ecx
	
	; reading values from variables
	
	movzx eax , word ptr var1	;  eax=FFFF
	movzx ebx , word ptr var2	;  ebx=FFFF
	add eax , ebx
	mov dword ptr res , eax		; copy result to res variable
	
	mov ebx,0
	mov ecx,0
	movzx ecx , word ptr var1 + 2	; ecx=EEDD
	movzx ebx , word ptr  var2 +2	; ebx=EEDD
	add ecx , ebx
	add ecx ,  dword ptr res + 2	;  add carry bit value
	mov dword ptr res + 2 , ecx	; copy result to res variable
	
	
	mov ebx,0
	mov ecx,0
	movzx ebx , word ptr var1 + 4	;ebx=DDCC
	movzx ecx , word ptr var2 + 4	;ecx=DDCC
	add ebx ,ecx
	add ebx , dword ptr res + 4 	;  add carry bit value
	mov dword ptr res + 4, ebx	; copy result to res variable
	

	
	mov ebx,0
	mov ecx,0
	movzx ebx , word ptr var1 + 6	;ebx=CCBB
	movzx ecx , word ptr var2 + 6	;ecx=CCBB
	add ebx ,ecx
	add ebx , dword ptr res + 6 	; add carry bit value
	mov dword ptr res + 6, ebx	; copy result to res variable
	
	xor ebx,ebx
	xor ecx,ecx
	movzx ebx , word ptr var1 + 8	;ebx=BBAA
	movzx ecx , word ptr var2 + 8	;ecx=BBAA
	add ebx ,ecx
	add ebx , dword ptr res + 8 	;  add carry bit value
	mov dword ptr res + 8, ebx	; copy result to res variable
	
	;
	;printing the result 
	;
	
	mov eax,0
	mov eax , dword ptr res +10
	call writehex
	
	mov eax,0
	mov eax , dword ptr res +6
	call writehex
	
	mov eax,0
	mov eax , dword ptr res +2
	call writehex	
	
	mov eax,0
	mov eax , dword ptr res 
	call writehex	
	
	call crlf
	
	

	exit
	main endp
	END main