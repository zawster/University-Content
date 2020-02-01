//#include<iostream>
//#include<fstream>
//using namespace std;
//int main(){
//	ifstream in;
//	in.open("input2.txt");
//	if(in.is_open()){
//		cout<<"file is now open";
//	}
//	else{
//		cout<<"the file is not  now open";
//	}
//	//cout<<"Hello";
//	return 0;}

//#include<iostream>
//#include<fstream>
//#include<string>
//
//using namespace std;
//
//int main()
//{
//	string str1, str2, str3,str4;
//	ifstream in;
//	in.open("input2.txt");
//		in>>str1>>str2>>str3>>str4;
//		cout<<str1<<" "<<str2<<" "<<str3<<str4<<endl;
//	in.close();
//
//system("pause");
//}


//#include<iostream>
//#include<fstream>
//#include<string>
//
//using namespace std;
//
//int main()
//{
//	string str;
//	ifstream in;
//	in.open("input2.txt");
//	while(in>>str)
//	{	
//		cout<<str<<" ";
//	}
//	cout<<endl;
//	in.close();
//
//system("pause");
//}

#include<iostream>
#include<fstream>
#include<string>

using namespace std;

int main()
{
//	string str;
//	char ch;
//	ifstream in;
//	in.open("input2.txt");
//	int c1=0;int c2=0;int c3=0;int c4=0;int c5=0;
//	while(!in.eof()){
//		in>>ch;
//		//cout<<ch<<endl;
//		c1++;
//	}
//	in.close();
//	cout<<"Total characters are :"<<c1<<endl;
//	in.close();
//	in.open("input2.txt");
//	while(!in.eof()){
//		in>>str;
//	//	cout<<str<<endl;
//		c2++;
//	}
//	in.close();
//	cout<<"Total words are :"<<c2<<endl;
//	in.open("input2.txt");
//	while(!in.eof()){
//		getline(in,str);
//		c3++;
//	}
//	cout<<"The number of lines are :"<<c3<<endl;
//	
//	in.close();
//	in.open("input2.txt");
//	while(!in.eof()){
//		in>>ch;
//		if(int(ch)=97 && int(ch)<=122){
//			c4++;
//		//	cout<<int(ch)<<endl;
//		}
//		else if(int(ch)>=65 && int(ch)<=90){
//			c5++;
//		}
//		
//	}
//	cout<<"total number of lowercase letters are:"<<c4<<endl;
//	cout<<"total number of uppercase letters are:"<<c5<<endl;
//	in.close();
//	
//	ofstream out;
//	out.open("test.txt");
//	in.open("input2.txt");
//	while(!in.eof()){
//		getline(in,str);
//		out<<str<<endl;
//		
//	}
//	in.close();
//	out.close();
	
	
	
	
	ifstream in;
	in.open("student.txt");
	int count;int sum=0;int max=0;int min=0;
	int marks;
	string fname,hfname,hlname;string lfname;string llname;
	string lname;
	while(!in.eof()){
		in>>fname>>lname>>marks;
		cout<<fname<<" "<<lname<<" "<<marks<<endl;
		count ++;
		sum+=marks;
		
	
		if(marks>max){
			hfname=fname;  hlname=lname;
			max=marks;
			min=max;
		}
		if(marks<min){
			lfname=fname;
			llname=lname;
			min=marks;
		}
	}
	cout<<"Heighest marks of "<<hfname<<" "<<hlname<<" "<<max<<endl;
	cout<<"lowest marks of "<<lfname<<" "<<llname<<" "<<min<<endl;	cout<<"The avg marks are ::"<<sum/count<<endl;	
	
	
	in.close();
	
	
	
	
	
	
	
	
	
	
	
//	string str;
////	while(!in.eof())
////	{	
////		in>>str;
////		cout<<str<<" ";
////	}
//     int a,b;
//     double c;
//     //string str;
//     char s;
//     while(!in.eof()){
//	 
//     in>>a>>b>>c>>str>>s;
//     cout<<a<<endl<<b<<endl<<c<<endl<<str<<endl<<s;
// }
//	cout<<endl;
//	in.close();

//system("pause");
}
