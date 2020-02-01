include irvine32.inc
.data

myStr byte "Sum of 20 and 5 is = ",0
myStr1 byte "Difference of 20 and 5 is=",0
myStr2 byte "Multiplication of 20 and 5 is=",0
x dword 20
y dword 5
.code
main PROC
xor eax, eax
mov eax, x
add eax, y

xor edx, edx
mov edx, offset myStr
call writestring
call writedec
call crlf
xor eax, eax
mov eax, y
sub eax, x

xor edx, edx
mov edx, offset myStr1
call writestring
call writeint
call crlf

xor eax, eax
mov eax, x
mul y

xor edx, edx
mov edx, offset myStr2
call writestring
call writedec
call crlf

exit
main endp
end main