include irvine32.inc
.data
msg1 byte "l1 start",0
msg2 byte "l2 start",0
   source DWORD 20 DUP(0FFFFFFFFh)
   target DWORD 20 DUP(0F0F0F0F0h)
 .code
   main PROC
     ;direction = forward
  mov ecx,LENGTHOF source	;set REP counter
  mov esi,OFFSET source	;ESI points to source
  mov edi,OFFSET target	;EDI points to target
  
  call dumpregs
  ;mov ecx,LENGTHOF source	;set REP counter
  ;  mov esi,OFFSET source	;ESI points to source
  ;  mov edi,OFFSET target	;EDI points to target
  ;  push esi
  ;  push edi
    mov edx,offset msg1
    call writestring
    mov ecx,20
  l2:
        mov eax,[esi]
        call writehex
        mov eax,[esi]
        call crlf
        add esi,4
  loop l2
  ;rep movsd	;copy doublewords
  call dumpregs
  exit
  main endp
  end main