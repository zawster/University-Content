#include "header_Files.h"
bool SignIN(string str,int key)
{
    string str1;
    int x;
    ifstream in;
    in.open("logIN.txt");
    while(!in.eof()){
        in>>str1;
        if(str==str1){
            in>>x;
            if(x==key)
                return true;
            break;
            }
    }
    return false;
}
