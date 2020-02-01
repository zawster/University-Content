.model small
.stack 100h
.data

first db 13,10, 'Enter 1st Number: $'
second db 13,10, 'Enter 2nd Number: $'
result db 13,10, 'Result: $'
invalid db 13,10, 'Invalid Number!!! $'

.code

start:
        mov ax,03
        int 10h

        mov ax,@data
        mov ds,ax

mn:
        mov dx, offset first
        mov ah,9
        int 21h

        mov ah,1
        int 21h

        mov cl,al

        cmp al,30h
        jl nvalid
        cmp al,39h
        jg nvalid
        jmp proceed

nvalid:
        mov dx,offset invalid
        mov ah,9
        int 21h
        jmp mn

proceed:
        sub cl,30h

        mov dx,offset second
        mov ah,9
        int 21h
        mov ah,1
        int 21h

        cmp al,30h
        jl nvalid
        cmp al,39h
        jg nvalid
        sub al,30h

        xor ah,ah
        add al,cl
        aaa

        mov cx,ax
        add cx,3030h
        mov dx, offset result
        mov ah,9
        int 21h

        mov ah,2
        mov dl,ch
        int 21h

        mov dl,cl
        int 21h

exit:
        mov ah,4ch
        int 21h