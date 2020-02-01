#include<iostream>
#include<stdlib.h>  //  for  rand()  function
#include<conio.h>
using namespace std;
bool gameOver;
const int width=20;
const int height=20;
int x , y;  //  for head position
int fruitX,fruitY;  // for fruit position
int tailX[100],tailY[100];  //  for creating the tail of the snake
int nTail;  // length of the tail
int score;
enum eDirection {STOP=0,LEFT,RIGHT,UP,DOWN};
eDirection dir;
//
//
void SetUp()
{
    gameOver=false;
    dir=STOP;
    x=width  / 2;
    y=height / 2;   //  at begining snake will be in middle
    fruitX = rand() % width;
    fruitY =  rand() % height;
    score=0;
}
//
//
void Draw()
{
    system("clear");   //  for windows use system("cls");
    for(int i=0 ; i<width+1 ; i++)
    {
        cout<<"#";  //  printing top wall
    }
    cout<<endl;
    for(int i=0 ; i<height ; i++)
    {
        for(int j=0; j<width ; j++)
        {
            if(j==0  || j==width-1)
            { //  printing side walls
                cout<<"#";
            }
            if(i==y && j==x)
            {  //  print starting head at begining
                cout<<"O";
            }
            else if(i==fruitY && j==fruitX)
            {   //  print fruit at begining
                cout<<"F";
            }
            else{
                bool print=false;
                for(int k=0;k< nTail;k++)
                {
                    if(tailX[k] == j && tailY[k] == i)
                    {
                        cout<<"o";  //  print the tail
                        print = true;
                    }
                }
                if(!print)
                {
                    cout<<" ";
                }
            }
        }
        cout<<endl;
    }

    for(int i=0 ; i<width+1 ; i++)
    {
        cout<<"#";  //  printing bottom wall
    }
    cout<<endl;
    cout<<"Score : "<<score<<endl;
}
//
//              input that is entered the user  like control the direction
//
void Input()
{
    if(_kbhit())  //  if any key from keybord is pressed "_kbhit()" return true
    {
        switch(_getch())
        {
            case 'a':
                dir=LEFT;
                break;
            case 'd':
                dir=RIGHT;
                break;
            case 's':
                dir=DOWN;
                break;
            case 'w':
                dir=UP;
                break;
            case 'q':
                gameOver = true;
                break;
        }
    }
}
//
//               main logic for programe
//
void Logic()
{
    int prevX = tailX[0];
    int prevY = tailY[0];  //  both store the previous cordinate of the snake
    int prev2X,prev2Y;
    tailX[0]=x;
    tailY[0]=y;   // to follow the tail to head
    for(int i=1;i<nTail;i++)
    {
        prev2X = tailX[i];
        prev2Y = tailY[i];
        tailX[i] = prevX;
        tailY[i] = prevY;
        prevX = prev2X;
        prevY = prev2Y;
    }
    switch(dir)  //  control the direction
    {
        case LEFT:
            x--;
            break;
        case Right:
             x++;
            break;
        case UP:
            y--;
            break;
        case DOWN:
            y++;
            break;
    }
//  if(x<0 || x>width || y<0 || y>height)   if head hits the walls  game might be over (optional)
//  {
//     gameOver = true;
//  }
    if(x >= width)
        x=0;
    else if(x <0)
        x = width -1;
    if(y >= height)
        y=0;
    else if(y < 0)
        y = height - 1;
    for(int i=0; i < nTail ;i++) //   check if head hit its tail
    {
       if(tailX[i] == x && tailY[i] == y)
       {
            gameOver = true;
       }
    }
    if(x == fruitX && y == fruitY)
    {
        score +=10;
        fruitX = rand() % width;
        fruitY =  rand() % height;
        nTail +=1;  // when we eat fruit the length of tail must increase


    }

}
//
//
int main(){
    SetUp();
    while(!gameOver)
    {
        Draw();
        Input();
        Logic();
    }
    return 0;
}
