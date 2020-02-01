#include<iostream>
#include<string>
#include<fstream>
using namespace std;
class customer{
    private:
        static string fname,lname,cinc,gender,photo,business,adress;
    public:
        static void newUser(){
            cout<<"Enter your Firstname:";
            cin>>fname;
            cout<<"Enter your Lastname:";
            cin>>lname;
            cout<<"Enter your CNIC number:";
            cin>>cinc;
            cout<<"Enter your picture name:";
            cin>>photo;
            cout<<"Enter your Business:";
            cin>>business;
            ofstream f;
            f.open("users.txt");
            f<<cinc<<" "<<fname<<" "<<lname<<" "<<gender<<" "<<business<<" "<<photo<<endl;
            f.close();

        }
        static void newAccount(){
            cout<<"Enter your Firstname:";
            cin>>fname;
            cout<<"Enter your Lastname:";
            cin>>lname;
            cout<<"Enter your CNIC number:";
            cin>>cinc;
            cout<<"Enter your Business:";
            cin>>business;
            cout<<"Enter your Adress:";
            cin>>adress;
            ofstream f;
            f.open("accounts.txt");
            f<<cinc<<" "<<fname<<" "<<lname<<" "<<gender<<" "<<business<<" "<<adress<<endl;
            f.close();
        }
        static void searchAcc(){
            string str,str1;
            cout<<"Enter your CNIC number";
            cin>>str;
            ifstream f;
            f.open("accounts.txt");
            while(!f.eof()){
                f>>str1;
                if(str1==str){
                    cout<<"Your account has been find";
                    break;
                }
            }

        }
};
class Transection{
    private:
        static string accid,cnic,reciever,amount;
    public:
        static void transection(){
            cout<<"Enter your AccountID";
            cin>>accid;
            cout<<"Enter your CNIC number";
            cin>>cnic;
            cout<<"Enter the receiver AccountID";
            cin>>reciever;
            cout<<"How many amount to Transfer";
            cin>>amount;
            //system("clear");
            cout<<"Your transection is successfully updated"<<endl;
        }

};
class Account{
    public:
        string accid;
        int x;
        Account(){
            cout<<"Enter your Accid :"; cin>>accid;
            cout<<"Enter 1 for add new user"<<endl;
            cout<<"Enter 2 for add new account"<<endl;
            cout<<"Enter 3 for do a transection"<<endl;
            cout<<"Enter 4 for search an account";
            cin>>x;
            //system("clear");
            if(x==1){
                customer obj;
                obj.newUser;
            }
            if(x==2){
                customer obj; obj.newAccount;
            }
            if(x==3){
                Transection obj; obj.transection;
            }
            if(x==4){

                customer obj; obj.searchAcc;

            }
        }

};

int main(){
    Account obj;
    return 0;
}
