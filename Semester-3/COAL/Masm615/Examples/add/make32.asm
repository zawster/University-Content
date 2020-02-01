include irvine32.inc
.data
.code
main proc
mov cx,1
sub cx,1
call dumpregs
mov cx,0
sub cx,1
call dumpregs
add cx,2
call dumpregs
xor eax,eax
mov al,0ffh
call writeint
inc al
call writeint
;call dumpregs
neg al
call writeint
dec al
call writeint
;call dumpregs
exit
main ENDP
end main