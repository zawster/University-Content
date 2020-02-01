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
tmatrix=0
mtx=[]
inn_= open('in.txt','r')
output=open('out.txt','a')
tmatrix = int(inn_.readline())
for m in range(tmatrix):
    del mtx[:]
    row = int(inn_.readline())
    col = int(inn_.readline())
    for r in range(row):
        mtx.append(list(map(int,inn_.readline().strip().split())))

    rowEchelon(row,col,mtx)

    
    output.write(str(row)+'\n')
    output.write(str(col)+'\n')
    for rw in mtx:
        for i in rw:
            f = Fraction(str(i))
            #print(f,end="  ") 
            output.write(str(f)+" ")
        output.write('\n')
 