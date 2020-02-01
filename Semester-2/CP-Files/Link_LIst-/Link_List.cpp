#include<iostream>
using namespace std;
struct Node{
    int info;
    Node *link;
    };
class linkList{
    private:
        Node *head,*temp,*Q;
    public:
        linkList(){
            head=NULL;
            temp=NULL;
            Q=NULL;
        }
        void insert_Node(int x){
            if(head==NULL){
                head=new Node();
                head->info=x;
                head->link=NULL;
            }
            else{
                temp=head;
                while(temp->link !=NULL){
                    temp=temp->link;

                }
                temp->link=new Node;
                temp->link->info=x;
                temp->link->link=NULL;
            }
        }
        void print(){
            temp=head;
            while(temp!=NULL){
                cout<<temp->info<<endl;
                temp=temp->link;
            }
        }
        void searc(int y){
            temp=head;
            int c=0;
            while(temp!= NULL){
                if(temp->info==y){
                    cout<<"Value is found :"<<endl;
                    return ;
                    }
                temp=temp->link;
                }
            cout<<"Value is not found";
                   // break;
        }
         void delete_start(){ //   delete Starting Node
            temp=head;
            Q=temp->link;
            head=Q;
            delete temp;

        }
        void delete_last(){    //  delete  last Node
            temp=head;
            while(temp->link !=NULL){
                Q=temp;
                temp=temp->link;
            }
            Q->link=NULL;
            delete temp;

        }
        void delete_only(){
            temp=head;
            if(temp->link==NULL){
                delete temp;
            }
        }
        void delete_Center(int item){
            temp=head;
            while(temp->info != item){
                Q=temp;
                temp=temp->link;
            }
            Q->link=temp->link;
            delete temp;
        }


    };
int main(){
    linkList obj;
    obj.insert_Node(2); //  Insert an new Node
    obj.insert_Node(4);
    obj.insert_Node(6);
    obj.insert_Node(7);
    obj.insert_Node(9);
    //   Delete exiting Node
    obj.delete_start();
    obj.delete_only();
    obj.delete_Center(6);
    obj.delete_last();
    //  Print the existing data of list
    obj.print();
    //  search the value from  list
    obj.searc(2);

}

