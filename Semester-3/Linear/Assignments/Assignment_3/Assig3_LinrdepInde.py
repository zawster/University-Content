from fractions import Fraction
import sys
def rowEchelon(row,col,Matrix):
    test=[]   
    temp = 0
    for r in range(row):
        if temp >= col:
            return
        i = r
        while Matrix[i][temp] == 0:
            i += 1
            if i == row:
                i = r
                temp += 1
                if col == temp:
                    return
        Matrix[i],Matrix[r] = Matrix[r],Matrix[i]
        val = Matrix[r][temp]
        Matrix[r] = [ k / float(val) for k in Matrix[r]]
        for i in range(row):
            if i != r:
                val = Matrix[i][temp]
                Matrix[i] = [ y - val*x for x,y in zip(Matrix[r],Matrix[i])]
        temp += 1


def Linearly_dep_indep(): 
        
    tvectors=0
    rows=0
    mtx=[]
    inn_= open('in.txt','r')
    output=open('out.txt','a')
    tvectors = int(inn_.readline())
    print()
    rows=int(inn_.readline())
    for m in range(tmatrix):      
        temp=[]
        for r in range(rows):
            temp.append(int(inn_.readline()))
        mtx.append(temp)
    matrix=[]
    for i in range(rows):
        temp=[]
        for j in range(tvectors):
            temp.append(mtx[j][i])
        matrix.append(temp)
    #print(matrix)
    
    rowEchelon(rows,tvectors,matrix)    #  Call for reduced Echelon
    for i in range(rows):               #   Removing fractions form matrix
        for j in range(tvectors):
            f=Fraction(str(matrix[i][j]))
            matrix[i][j]=int(f)
                                         #   Printing Reducedechelon Matrix
    for row in matrix:
        for j in row:    
            print(str(j)+"  ",end="")
        print()
    print("***************   Result   *****************")
    Rank=0
    for row in matrix:
        if(any(i!=0 for i in row)):
            Rank+=1
    #if(all(i==0 for i in matrix[-1])):     #   Checking for linear dependent and independent
     #   print("Since there exist a free variable (no. of variables > Rank), \n  So it is Linearly Dependent ")
    if(tvectors > Rank):
        print("Since system has non-trivial solutions \n So it is Linearly dependent!")
    elif(Rank == tvectors):
        print("Since system has trivial solutions \n So it is Linearly Independent!")

    
    
Linearly_dep_indep()
