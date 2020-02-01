#
#       Matrix and Vector is given and find eigon values
# 

#       Q   #   4

import sympy
def EigonValue(A,siz):
    lamda=sympy.Symbol('x')
    identity=sympy.eye(siz)
    identity=sympy.Matrix(identity)
    identity = identity*lamda   # y*I

    final = A - identity
    exp=sympy.det(final)
    sol=sympy.solve(exp)
    
    return sol
    
def test(A,V):
    c=len(A)
    A=sympy.Matrix(A)
    lst=EigonValue(A,c) # make Eigon values
    AxV=A*V
    for i in lst:
        final = V*i
        if(final==AxV):
            print(i,end=" is the corresponding Eigon value")
            print()
            return

a=[[1,6],
   [5,2]]     #   Matrix
b=[[6],
   [-5]]         #   Vector
b=sympy.Matrix(b)
test(a,b)