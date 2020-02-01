Include Irvine32.inc
.data
arrayb byte 1h,2h,3h
addition textequ <mov al,[arrayb]>
addition1 textequ <mov ah,[arrayb+1]>
addition4 textequ <mov al,[arrayb+2]>
addition2 textequ <add al,ah>
addition3 textequ <add al,al>
.code
main proc
XOR EAX,EAX
addition 
addition1
addition2
call dumpregs
addition4
addition3
call dumpregs
exit
main endp
end main