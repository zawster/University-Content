INCLUDE Irvine32.inc

.data
binValue DWORD 1234ABCDh
buffer BYTE 32 DUP(0) ,0

.code
main PROC
mov eax,binValue
mov ecx,32
mov esi,OFFSET buffer
L1: 
  shl eax,1
  mov BYTE PTR [esi],'0'
  jnc L2
  mov BYTE PTR [esi],'1'
L2:
  inc esi
loop L1
  mov edx,OFFSET buffer
  call WriteString
  call Crlf
exit
main ENDP
END main
