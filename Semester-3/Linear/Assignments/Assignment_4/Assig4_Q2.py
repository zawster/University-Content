#
#       Matrix and Vector is given and check eigon vector
# 

#       Q   #   2

import sympy
def isEigonVector(A,V):
    flg=0
    x=A*V
    x=sympy.Matrix(x)
    for i in range(-10,10):
        if(i==0 or i==-1 or i==1):
            continue
        y=V*i
        y=sympy.Matrix(y)
        if(y==x):
            flg=1
            break
    if( flg!= 1):
        print("Given Vector is not eigon vector of matrix.")
    else:
        print("Yes the given vector is eigon vector of Matrix.")

a=[[1,6],
   [5,2]]     #   Matrix
b=[[6],[-5]]         #   Vector
a=sympy.Matrix(a)
b=sympy.Matrix(b)
isEigonVector(a,b)