INCLUDE Irvine32.inc;
.data
           Msg1 BYTE "hi dude whts up.",0
.code
       main PROC
       mov edx,OFFSET Msg1
       call WriteString
      exit
main ENDP
END main
