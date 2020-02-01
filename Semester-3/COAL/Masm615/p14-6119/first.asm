INCLUDE Irvine32.inc;
.data

      a dword 11
      b dword 6
      

.code

     main PROC
     call dumpregs 
     mov eax,a
     sub eax,b
     call dumpregs 
         
     exit

main ENDP
END main










