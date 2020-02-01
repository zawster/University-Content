
#include<iostream>
using namespace std;
template<class t>
t sum(t a,t b){

	return a+b;
}
template<class t>
class list{
	protected:
		
		t arr[5];
		t x;
	public:
		void inilize(){
			
			for(int i=0;i<5;i++){
				cout<<"enter value "<<i<<":";
				cin>>x;
				arr[i]=x;
			}
		}
		void print(){
			for(int i=0;i<5;i++){
				cout<<arr[i]<<endl;}
		}
		bool search(t key){
			for(int i=0;i<5;i++){
				if (key==arr[i]){
					return true;
				}
			return false;
		}
	}
		void max(){
			x=arr[0];
			for(int i=0;i<5;i++){
				if(x<=arr[i])
					x=arr[i];
			cout<<"max is "<<x;	
		}}
};
int main(){ 
list<int> obj;
obj.inilize();
obj.print();
cout<<obj.search(2)<<endl;
list<char> obj2;
obj2.inilize();
obj2.print();
cout<<obj2.search('a')<<endl;
list<double> obj3;
obj3.inilize();
obj3.print();
cout<<obj3.search(1.2)<<endl;
return 0;
}
//string a="ali ";
//string b="hamza";
//   cout<<sum(2,3)<<endl;
//   cout<<sum(2.3,3.6)<<endl;
//   cout<<sum('a','n')<<endl;
//   cout<<sum(a,b)<<endl;

