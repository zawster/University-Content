#include<iostream>
#include<fstream>
using namespace std;
int main(){
	string str;
	ifstream in;
	in.open("filehandling.cpp");
	while(!in.eof()){
		getline(in,str);
		cout<<str<<endl;
	}
	in.close();
}
