Include Irvine32.inc
.data
str2 byte "odd numbers are:",0
str3 byte "even numbers are:",0
arr1 byte 1,2,3,4,5
str1 byte 0dh,0ah,0
var1 byte 10 dup(0)
var2 byte 10 dup(0)
.code
main proc
xor edx,edx
mov edx,offset str2
call writestring
mov esi,offset arr1
mov ecx,4
L1:
or byte ptr [esi],1b
jnz odd
odd:
xor eax,eax
mov al,[esi]
mov var1,al
call writedec
inc esi
loop L1
xor edx,edx
mov edx,offset str1
call writestring
mov edx,offset str3
call writestring
mov esi,offset arr1
mov ecx,4
L2:
xor byte ptr [esi],1b
jz eve
eve:
xor eax,eax
mov al,[esi]
mov var2,al
call writedec
inc esi
loop L2
exit
main endp
end main
