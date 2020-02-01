set terminal png size 800,500
set title "Steps/Time Graph"
set output "graph1.png"
set xlabel "STEPS(N)"
set ylabel "Time(Mili Sec)"
plot "file1.txt" using 1:2 with linespoints title "Steps/Time" lw 2

set terminal png size 800,500
set title "Absolute Relative Error Graph"
set output "graph2.png"
set xlabel "STEPS(N)"
set ylabel "Abs Error and Relative Error"
plot "final.txt" using 1:5 with linespoints title "Steps/Error" lw 2, "final.txt" using 1:4 with linespoints title "Steps/Relative Error" lw 2