include irvine32.inc
.data
val1 DWORD 5
result DWORD ?
.code
main proc
mov eax,10
call crlf
.IF eax > val1
mov result,1
call writedec
.ENDIF
  exit
  main endp
  end main
  