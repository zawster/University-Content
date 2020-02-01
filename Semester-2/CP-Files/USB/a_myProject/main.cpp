#include "header_Files.h"
#include "Questions.h"
#include "SignUP.h"
#include "SignIN.h"
int main()
{
    ///*
    string s1,s2,s3,s4;
    int ke;
    s1="Muhammad";
    s2="Ahsan";
    s3="ahsan@gmail.com";
    //s4="ahsan";
    //ke=123;
    //bool x=Sign_up(s1,s2,s3,s4,ke);
    cout<<"Enter your User Name "; cin>>s4;
    cout<<"Enter your password ";cin>>ke;
    if(SignIN(s4,ke)){
        cout<<"You are now loge IN"<<endl;
        Rand_Array obj;
        obj.read_Questions();
        obj.Marking();
    }
    else
        cout<<"Your are Invalid Student";


   // */

    return 0;

}
