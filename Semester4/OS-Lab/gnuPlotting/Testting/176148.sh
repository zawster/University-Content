
 gcc main.c -o main_out
 ./main_out 10000
 

awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $1,$2,abs($3=$1-3.14159265)}' test1.txt > temp.txt
awk 'function abs(x) {return (x<0) ? x*=-1 : x}{print $2,$3,abs($4=$2/$3)}' temp.txt > plot2.txt  
#gnuplot 
#set term qt
#plot "test1.txt" using 1:2
#plot "test12.txt" using 2:3

#gnuplot << EOF
#set terminal gif
#set output 'plot1.gif'
#plot 'plot1.txt' using 1:2
 
#EOF


#gnuplot << EOF
#set terminal gif
#set output 'plot2.gif'
#plot 'plot2.txt' using 2:3
 
#EOF



