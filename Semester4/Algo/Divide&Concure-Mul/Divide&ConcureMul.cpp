#include<iostream>
#include<string>
#include<sstream>
using namespace std;

struct Node{
    string info;
    Node *next;
};
class Algo{
    private:
        
        string temp1;
        
    public:
        string str1,str2;
        Node *arr1,*arr2,*temp,*Final;
        int len1,len2;
        Algo(){
            arr1=arr2=temp=Final=NULL;
            len1=len2=0;
            cout<<"Enter first value : ";
            cin>>str1;
            cout<<"Enter second value : ";
            cin>>str2;
            len1=str1.size();
            len2=str2.size();
            if(len1 % 2 != 0){  // for making pairs
                str1 = "0"+str1;
                len1+=1;
            }
            if(len2 % 2 != 0){  // for making pairs
                str2 = "0"+str2;
                len2+=1;
            }
        }
        void Seprate(int,Node*,string,int);
        void Multiply();
        int Count(Node*);
        void Combine(int,string);
};
void Algo::Seprate(int len,Node* arr,string str,int a){
    for(int i=0;i<len;i=i+2){
        temp1=str[i];
        temp1+=str[i+1];
        if(arr==NULL){
            arr=new Node;
            arr->info=temp1;
            arr->next=NULL;
        }
        else{
            temp=arr;
            while(temp->next != NULL){
                temp=temp->next;
            }
            temp->next=new Node;
            temp->next->info=temp1;
            temp->next->next=NULL;   
        }      
    }
    if (a==1){
        arr1=arr;
    }
    else{
        arr2=arr;
    }
    return;
}
//------------------------------------------------------------
void Algo::Multiply(){
    int count=0;
    int count1=0;
    int x,y,s;
    Node *temp2=arr2;
    temp=arr1;
    while(temp !=NULL ){
        count=count1=0;
        temp2=arr2;
        stringstream convert(temp->info); // converting string into int
        convert >> x;
        count+=Count(temp);
        while(temp2 != NULL){
            count1=Count(temp2);
            stringstream convert(temp2->info); 
            convert >> y;
            s=x*y;
            // Convert int to string
            stringstream ss;
            ss << s;
            temp1 = ss.str();
            temp2=temp2->next;
            Combine(count+count1,temp1);
        }
        //cout<<count<<endl;
        temp=temp->next;
        
    }
    temp=Final;
    s=0;
    while(temp!=NULL){
        temp1=temp->info;
        stringstream convert(temp->info); // converting string into int
        convert >> x;
        s+=x;
        temp=temp->next;
    }
    cout<<"The Product is "<<s<<endl;
    return;   
}
//------------------------------------------------------------
void Algo::Combine(int x,string str){
    while(x!=0){
        str+="0";
        x-=1;
    }
    if(Final==NULL){
        Final=new Node;
        Final->info=str;
        Final->next=NULL;
        return;
    }
    Node *t=Final;
    while(Final->next != NULL) {
        Final=Final->next;  
    }
    Final->next=new Node;
    Final->next->info=str;
    Final->next->next=NULL;
    Final=t;
    return;
}
//------------------------------------------------------------
int Algo::Count(Node *temp){
   int count=0;
   while(temp->next != NULL){
       count+=2;
       temp=temp->next;
   }
   return count;
}

//------------------------------------------------------------
int main(){
    Algo obj;
    obj.Seprate(obj.len1,obj.arr1,obj.str1,1);
    cout<<"--------------------"<<endl;
    obj.Seprate(obj.len2,obj.arr2,obj.str2,2);
    obj.Multiply();
    return 0;
}
