#!/bin/sh
gcc main.c -o test   #  Compiling the programm
a=10
while [ "$a" -lt 1000000000 ]    # STEPS from 10 to 1000000
do  
    ./test "$a"
    #echo "$a"
    a=`expr $a \* 5`
done
awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $1,$2,abs($3=$1-$2)}' file2.txt > temp.txt   # calculation of Absolute Error from file2.txt = |pi - acos(-1)|
awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $2,$3,abs($4=$2/$3)}' temp.txt > temp1.txt   # Calculation of Absolute Relative Error = |pi - acos(-1)| / |acos(-1)|
paste -d ' ' file1.txt temp1.txt >> final.txt   #  merging two files data

gnuplot gnuplot.plt

xdg-open graph1.png  # to open an first graph
xdg-open graph2.png  # to open an second graph
