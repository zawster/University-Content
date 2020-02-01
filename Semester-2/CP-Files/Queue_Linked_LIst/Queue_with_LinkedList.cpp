#include<iostream>
using namespace std;
struct Node{
    int info;
    Node* link;
};
class Queue{
    private:
        Node* frnt;
        Node* rear;
        Node* temp;
    public:
        Queue(){
            frnt=NULL;
            rear=NULL;
            temp=NULL;
        }
        void EnQueue(int x){
            temp=new Node();
            temp->info=x;
            temp->link=NULL;
            if(rear==NULL && frnt==NULL){
                frnt=temp;
                rear=temp;
                return ;
            }
            else{
                rear->link=temp;
                rear=temp;
            }
        }

        void deleteQueue(){
            temp=frnt;
            if(frnt==NULL)
                return ;
            if(frnt==rear){
                rear=NULL;
                frnt=NULL;
            }
            else{
                frnt=frnt->link;
            }
            delete temp;
        }

        void print(){
            temp=frnt;
            while(temp != NULL){
                cout<<temp->info<<" ";
                temp=temp->link;
            }
        }
};
int main(){
    Queue obj;
    obj.EnQueue(2);
    obj.EnQueue(4);
    obj.EnQueue(6);
    obj.EnQueue(8);
    obj.deleteQueue();
    obj.print();
    return 0;
}
