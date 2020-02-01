#
#   Find eigon value matrix and Vector is givn
#
            #    Q # 1

import sympy
from sympy import *
def test(A,val,col):
    identity=sympy.eye(col)     #  Make Identity matrix
    identity=sympy.Matrix(identity)
    x = val*identity
    x = sympy.Matrix(x)
    final=A-x   #   A-yI
    final=Matrix(final)
    tple=final.rref()      #  make reduced echelon form
    idntcoloumns =tple[1:]  
    j =len(idntcoloumns[0])
    if j==col:
        print("No it is not eigon value")
    else:
        print("Yes it is eigon value")

            
    # if final==0:
        # print("Yes the value is Eigon value;")
    # else:
        # print("NO the value is not Eigon value;")


a=[[1,6],[5,2]]     #  Matrix
value=0.5          #  Value
row=len(a[0])
a = sympy.Matrix(a)
test(a,value,row)