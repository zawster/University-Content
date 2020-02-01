#
#       Matrix and Vector is given and find eigon values
# 

#       Q   #   3
import sympy
def Question3(A,siz):
    lamda=sympy.Symbol('x')
    identity=sympy.eye(siz)
    identity=sympy.Matrix(identity)
    identity = identity*lamda   # y*I

    final = A - identity
    exp=sympy.det(final)
    sol=sympy.solve(exp)
    print("The eigon values are : ")
    for i in sol:
        print(i)

a=[[1,6],
   [5,2]]     #   Matrix
b=len(a)
a=sympy.Matrix(a)
Question3(a,b)