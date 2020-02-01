a=10
gcc main.c -o test
while [ "$a" -lt 1000000000 ]    # this is loop1
do  
    ./test "$a"
    #echo "$a"
    a=`expr $a \* 5`
done

awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $1,$2,abs($3=$1-$2)}' file2.txt > temp.txt   # calculation of Absolute Error from file2.txt = |pi - acos(-1)|
awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $3,$2,abs($4=$3/$3)}' temp.txt > temp1.txt   # Calculation of Absolute Relative Error = |pi - acos(-1)| / |acos(-1)|
gnuplot gnuplot.plt

xdg-open graph1.png
xdg-open graph2.png 