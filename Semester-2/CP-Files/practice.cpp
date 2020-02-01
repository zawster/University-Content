/*#include <iostream>
using namespace std;
class Distance //English Distance class
{
private:
int feet;
float inches;
public:
    //  constructor (no args)
  //  Distance() : feet(0), inches(0.0)
    //{ }
    //Note: no one-arg constructor
    //constructor (two args)
    Distance(int ft, float in) : feet(ft), inches(in)
    { }
    void getdist() //get length from user
    {
        cout << "\nEnter feet: "; cin >> feet;
        cout << "Enter inches: "; cin >> inches;
    }
    void showdist() //display distance
    { cout << feet << "\’" << inches << "‘"; }
};
int main()
{
    Distance dist1 (11, 6.25); //two-arg constructor
    Distance dist2 (dist1); //one-arg constructor
    Distance dist3 = dist1;
    Distance dist4(dist2);
    Distance dist5=dist4; //also one-arg constructor
    //display all lengths
    cout << "\ndist1 = "; dist1.showdist();
    cout << "\ndist2 = "; dist2.showdist();
    cout << "\ndist3 = "; dist3.showdist();
    cout << "\ndist4 = "; dist4.showdist();
    cout << "\ndist5 = "; dist5.showdist();

    cout << endl; return 0;
}
*/
#include<iostream>
using namespace std;
class shape
{
 int size;
public:
virtual void draw()
{
 cout<<"Shape Class"<<endl;
}
};
class circle : public shape
{
 int raduis;
 public:
 void draw()
 {
 cout<<"Circle"<<endl;
 }
};
class rectangle : public circle
{
 int raduis;
 public:
 void draw()
 {
 cout<<"Rectangle"<<endl;
 }
};
int main()
{
 shape* ptrarr[2];
ptrarr[0]=new circle;
ptrarr[1]=new rectangle;
for(int i=0;i<2;i++)
 ptrarr[i]->draw();
//system("pause");
return 0;
}
