Include Irvine32.inc
.data
.code
main proc
xor eax,eax
mov al,10110011b
shr ax,1
call dumpregs
call writebin
mov al,00110010b
rol al,3
call dumpregs
call writebin


xor eax,eax
mov al,10101010b
rcl al,1
call dumpregs
call writebin
exit
main endp
end main