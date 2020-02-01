#include<iostream>
#include<string>
#include<fstream>
#include<sstream>
using namespace std;
class test{
    private:
        string str,st;
        char ch;
        int x,sum=0;
    public:
        test(){
            ifstream in;
            ofstream out;
            out.open("output.txt" , ios::app);
            in.open("input.txt");
            if(in.is_open()){
                while(!in.eof()){
                    in>>str;
                    cout<<str<<endl;
                    for(int i=0;i<str.size();i++){
                        for(int j=0;j<i+1;j++){
                            if(str[i]=='+'||str[i]=='-'||str[i]=='*' || str[i]=='/')
                                ch=str[i];

                        }
                        if(str[i]!='+' || str[i]!='-' || str[i]!='*' || str[i]!='/')
                            st=str[i];
                            //{
                            int y=0;
                            stringstream geek(st);
                           geek>>y;
                          //  cout<<y<<"|";
                        switch(ch)
                        {
                            case '+':
                                sum +=int (x);
                            case '-':
                                sum -=int(x);
                            case '*':
                                sum *=int(x);
                            case '/':
                                sum /=int(x);
                        }
                    }
                    //cout<<sum<<endl;
                    //str=string(sum);
                    out<<sum<<endl;

            }
        }

//    in.close();
  //  out.close();
    }

};
class test2{
    private:
        int x,sum=0;
        char ch;
    public:

        test2(){
            ifstream in;
            ofstream out;
            out.open("output.txt" , ios::app);
            in.open("input.txt");
            //if(in.is_open()){
                while(!in.eof()){
                    in.get(ch);
                    if(ch=='\n'){
                       // out<<sum<<endl;
                        cout<<sum<<endl;
                        sum=0;
                        continue;

                    }
                    in>>x;
                    //cout<<x<<"|";
                    if(ch=='+')
                        sum=sum+x;
                    if(ch=='-')
                        sum=sum-x;
                    if(ch=='*')
                        sum =sum*x;

                }

                out<<sum;
                cout<<sum;
           // }

        }
};
double division(int a,int b){
    if(b==0){
        throw "Division by zero not allowed :";
    }
    return a/b;

}
int main(){
    //test obj;
    //test2 obj;
    //string str;
    int x=20;
    int y=0;
    double z;
    try {
        z=division(x,y);
        cout<<z;
    }
    catch (const char* str){
        cout<<str;
    }
    return 0;

}
