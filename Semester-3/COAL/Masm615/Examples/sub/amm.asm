.MODEL SMALL
.STACK 100h
.DATA
choice_msg  db 13,10,'Addition or Subtraction?',13,10,'$' 

first_msg   db 13,10,'Enter the first number:',13,10,'$'   
second_msg  db 13,10,'Enter the second number:',13,10,'$'    
result_msg  db 13,10,'The result is:',13,10,'$'    
new_line    db 13,10,'$'    
val1        db ?    
num2        db ?    
num3        db ?    
num4        db ?      
ten         db 10    

.CODE                       ;where the code is written

start:

mov ax, @data           ;Moves the address of the variables under .DATA into ax

mov ds,ax           ;moves ax into ds. the two lines allow you to display string using the 21h interrupt sequence 9

    mov ah,09
    mov dx, offset choice_msg
    int 21h             ;displays the string in choice_msg

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    mov val1,al         ;moves the value in the al to the variable val1

    cmp val1,'+'            ;compares the entered value in val1 with "+"
    je addition         ;if the enterd value is "+" then it jumps to addition else it jumps to subtraction

addition:
    mov ah,09
    mov dx, offset first_msg
    int 21h             ;displays the string in first_msg

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the vaule in the al
    mov num2,al         ;moves the value in the al to the variable num2

    mov ah,01           
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num3,al         ;moves the value in the al to the variable num3

    mov al,num2         ;moves the value in num2 into the al
    mul ten             ;multiplies the value in the al by ten
    add al,num3         ;adds the value in num3 to the al, to get the two-digit number
    mov num2,al         ;moves the two digit value into

    mov ah,09
    mov dx, offset new_line 
    int 21h             ;goes to the next line, i.e. "enter"

    mov ah,09
    mov dx, offset second_msg   ;displays the string in second_msg
    int 21h             

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num3,al         ;moves the new value in the al into the variable num3

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num4,al         ;moves the new value in the al into the variable num4

    mov al,num3         ;moves the value in num3 into the al
    mul ten             ;multiplies the value in the al by ten
    add al,num4         ;adds the value in num4 to the al, to get a two-digit number
    mov num3,al         ;moves the value in the al into the variable num3

    mov ah,09
    mov dx, offset new_line
    int 21h             ;goes to the next line, i.e. "enter"

    mov ah,09
    mov dx, offset result_msg
    int 21h             ;displays the string in reslut_msg

    ; mov the value of num 3 into bl
    mov bl, num3

    add num2,bl         ;adds num3 and num2 to form the sum
    add num2,48         ;adds 48 to num2


    mov al,num2
    mov ah,02
    mov dl, al
    int 21h             ;displays the value that was in the al

    mov ah,09
    mov dx, offset new_line
    int 21h             ; goes to next line, i.e. "enter"

    mov ax,4c00h
    int 21h             ;ends the program


subtraction:
    mov ah,09
    mov dx, offset first_msg
    int 21h             ;displays the string in first_msg

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 001
    sub al,48           ;subtracts 48 from the value in the al
    mov num2,al         ;moves the value in the al into the variable num2

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num3,al         ;moves the value in the al into the variable num3

    mov al,num2         ;moves the value in num2 into the al
    mul ten             ;multiplies the value in the al by ten
    add al,num3         ;adds the value in num3 to the al, to get a two-digit number
    mov num2,al         ;moves the value in the al into the variable num2

    mov ah,09
    mov dx, offset new_line 
    int 21h             ;goes to the next line, i.e. "enter"

    mov ah,09
    mov dx, offset second_msg
    int 21h             ;displays the string in second_msg

    mov ah,01
    int 21h             ;copies a value into the al, using subfunction 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num3,al         ;moves the value in the al into the variable num3

    mov ah,01
    int 21h             ;copies a value into the al, using subfuntion 01
    sub al,48           ;subtracts 48 from the value in the al
    mov num4,al         ;moves the value in the al into the variable num4

    mov al,num3         ;moves the value in num3 into the al
    mul ten             ;multiplies the value in the al by ten
    add al,num4         ;adds the value in num4 to the al, to get a two-digit number
    mov num3,al         ;moves the value in the al into the variable num3

    mov ah,09
    mov dx, offset new_line
    int 21h             ;goes to next line, i.e. "enter"

    mov ah,09
    mov dx, offset result_msg
    int 21h             ;displays the string in result_msg

    mov bl, num3        ;move value of num3 to bl

    sub num2,bl         ;subtracts the value in num3 from the value in num2
    add num2,48         ;adds 48 to the new value in num2
    mov al,num2         ;moves the value in num2 into the al
    mov ah,02
    mov dh,al
    int 21h             ;displays the resulting value

    mov ah,09
    mov dx, offset new_line
    int 21h             ;goes to the next line, i.e. "enter"

    mov ax,4c00h
    int 21h             ;ends the program

END