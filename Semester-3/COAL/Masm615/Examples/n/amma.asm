.data
_hello:
    .asciz "Hello, world\n"


.text
.globl _main
_main:
    movq $0, %rax
    movq _hello(%rip), %rdi
    call _printf