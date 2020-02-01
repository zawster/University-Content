INCLUDE Irvine32.inc;

.data

ARRAY BYTE 5,6,7,2,8,-1
scount BYTE ?

msg1 BYTE "Plz enter an integer number: ",0

.code
main PROC

mov ecx, LENGTHOF ARRAY
mov edx, offset msg1

call writestring
call readInt
mov num, eax
Call clrscr
mov eax, data
mov ds, eax
mov ecx, offset ARRAY
mov eax, [esi]
mov smallest, eax
mov ecx, 6
L1:
mov eax, [esi]
cmp eax, smallest
mov smallest, eax
JMP L2

L2:

add ecx,2
LOOP L1

exit;
main ENDP
END main