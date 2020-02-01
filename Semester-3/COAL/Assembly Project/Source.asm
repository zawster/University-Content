

; procedures from Irvine32.lib. 

INCLUDE Irvine32.inc
INCLUDELIB Irvine32.lib
INCLUDELIB kernel32.lib
INCLUDELIB User32.lib

INCLUDE macros.inc

BUFFER_SIZE = 2048

.data
msg byte "kamran is a good boy"
filename    BYTE 80 DUP(0)
filename1   BYTE 80 DUP(0)
onedigit byte "No is of 1 digits",0
twodigit byte "no if of 2 digit",0
var1 byte ?
var2 byte ?
.data?
arr byte 8 dup(?)
ramd byte ?
buffer BYTE BUFFER_SIZE DUP(?)
buffer1 BYTE BUFFER_SIZE DUP(?)
.code
main PROC
;--------------------------------------------------------------------
;Open and read the Question from a file
;....................................................................
LOCAL fileHandle:DWORD
; Let user input a filename.
	mWrite "Enter an input filename: "
	mov	edx,OFFSET filename
	mov	ecx,SIZEOF filename
	call	ReadString

; Open the file for input.
	mov	edx,OFFSET filename
	call	OpenInputFile
	mov	fileHandle,eax

; Check for errors.
	cmp	eax,INVALID_HANDLE_VALUE		; error opening file?
	jne	file_ok					; no: skip
	mWrite <"Cannot open file",0dh,0ah>
	jmp	next						; and quit
file_ok:

; Read the file into a buffer.
	mov	edx,OFFSET buffer
	mov	ecx,BUFFER_SIZE
	call	ReadFromFile
	call	Crlf

; Display the buffer.
	mWrite <"Buffer:",0dh,0ah,0dh,0ah>
	;mov	edx,OFFSET buffer	; display the buffer
	;call	WriteString
	;call	Crlf
	
close_file:
	mov	eax,fileHandle
	call	CloseFile

;..............................................................
;Generate Random Numbers for questions and store it into a array
;...............................................................
call clear
mov esi,0
call randomize
mov ecx,8
l1:
nxt:
mov eax,26
call randomrange
mov ramd,al
mov al,ramd
mov arr[esi],al
call writedec
inc esi
call crlf
loopnz l1
xor edx,edx
xor eax,eax
xor ebx,ebx
mov eax,0
mov edx,0
mov esi,0
mov ecx,8
l8:
xor eax,eax
xor ebx,ebx
xor edx,edx
mov edx,0
mov al,arr[esi]   
mov bl,10
div bl
;mov eax,edx
;call writeint
;call dumpregs
inc esi
mov dl,al
;call dumpregs
cmp dl,0
jnz n7
mov edx,offset onedigit
call writestring
call crlf
call onedig
;.....................................
push ecx
call caseone
pop ecx
pop esi
mov edx,offset msg
call writestring
;.....................................
jmp go
n7:
mov edx,offset twodigit
call writestring
call twodig
call crlf
go:
loop l8
;....................................................................
;SEARCH FOR QUESTION AND THEN SHOW IT ON CONSOLE SCREEN(In case of 1 Digit)
;--------------------------------------------------------------------

;....................................................................
;Open and read the Answers from a file
;....................................................................
next:
xor eax,eax
xor ecx,ecx
xor edx,edx
xor esi,esi
; Let user input a filename.
	call crlf
	mWrite "Enter an input filename: "
	mov	edx,OFFSET filename1
	mov	ecx,SIZEOF filename1
	call	ReadString

	; Open the file for input.
	mov	edx,OFFSET filename1
	call	OpenInputFile
	mov	fileHandle,eax
	; Check for errors.
	cmp	eax,INVALID_HANDLE_VALUE		; error opening file?
	jne	file_next					; no: skip
	mWrite <"Cannot open file",0dh,0ah>
	jmp	quit						; and quit
	file_next:

; Read the file into a buffer.
	mov	edx,OFFSET buffer1
	mov	ecx,BUFFER_SIZE
	call	ReadFromFile
	call	Crlf

; Display the buffer.
	mWrite <"Buffer1:",0dh,0ah,0dh,0ah>
	mov	edx,OFFSET buffer1	; display the buffer
	call	WriteString
	call	Crlf

quit:
;call ReadChar ; pause before closing
	exit
	ret
main ENDP
clear proc
xor eax,eax
xor ebx,ebx
xor ecx,ecx
xor edx,edx
xor esi,esi
xor edi,edi
ret
clear endp
onedig proc
xor ebx,ebx
mov bl,ah
xor eax,eax
mov al,bl
or al,48
call writechar
call crlf
mov var1,al
ret
onedig endp
twodig proc
mov bl,ah
mov bh,al
xor eax,eax
mov al,bh
or al,48
call writechar
mov var1,al
xor eax,eax
mov al,bl
or al,48
call writechar
mov var2,al
ret
twodig endp
caseone proc
mov esi,0
mov ecx,2048
l6:
mov al,var1
cmp buffer[esi],al
jne l7
inc esi
cmp buffer[esi],')'
jne l7
push ecx
inc esi
mov ecx,100
ll:
xor eax,eax
mov al,buffer[esi]
call writechar
inc esi
xor eax,eax
cmp buffer[esi],'('
je l4
loop ll
pop ecx
l7:
inc esi
loop l6
l4:
mov edx,offset msg
call writestring
ret 
caseone endp
END main
