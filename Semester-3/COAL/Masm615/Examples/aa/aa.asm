.model small
.stack 64
.data
.code
start :    MOV AX,@DATA
MOV DS,AX
MOV AL,04H
NOT AL;1's complement
MOV SI,3000H    ;position where 1's complement will be stored
MOV [SI],AL
ADD AL,01H      ;2's complement
MOV SI,2000H      ;position to store 2's complement
MOV [SI],AL
END start
.end
