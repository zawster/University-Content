#include<iostream>
using namespace std;
struct Node{
    int info;
    Node *link;
};
class linkedlist{
    private:
        Node *N,*start,*p;
    public:
        linkedlist(){
            start =NULL;
            N=NULL;
            p=NULL;
        }
        void makenewNode(){
            N=new Node;
            cout<<"Enter your data: ";
            cin>>N->info;
            N->link=NULL;
        }
        void linknode(){
            if(start==NULL){
                start=N;
                return;
            }
            p=start;
            while(p->link != NULL){
                p=p->link;
                p->link=N;
            }
        }
        void print(){
            p=start;
            while(p->link==NULL){
                cout<<p->info<<"/"<<p->link;
            }
        }
};
int main(){
    linkedlist obj;
    obj.makenewNode();
    obj.linknode();
    obj.print();
    return 0;
}
