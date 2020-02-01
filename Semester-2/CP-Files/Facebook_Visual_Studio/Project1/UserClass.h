#pragma once

#include <string>
#include <string.h>
#include <iostream>
#include <stdio.h>
#include <fstream>
//#include <msclr\marshal_cppstd.h>


//using namespace msclr::interop;
using namespace std;
using namespace System;
using namespace System::ComponentModel;
using namespace System::Collections;
using namespace System::Windows::Forms;
using namespace System::Data;
using namespace System::Drawing;


ref class UserClass
{
public:

	String^ Fname;

	String^ Lname;
	String^ dateOfBirth;
	String^ password;
	String^ Email;
	String^ phone;

	UserClass(void)
	{



	}

	void getVals(String^ f, String^ l, String ^dob, String^ email, String^ pass)
	{
		Fname = f;
		Lname = l;
		dateOfBirth = dob;
		password = pass;
		Email = email;
	}

	void signup(String^ fname,String^ lname, String^ email,String^ birth,String^ password)
	{
		std::string f = marshal_as<std::string>(fname);
		std::string femail = marshal_as<std::string>(email);
		std::string fpass = marshal_as<std::string>(password);
		std::string _lname = marshal_as<std::string>(lname);
		std::string dob = marshal_as<std::string>(birth);
		//string femail;
		fstream file;

		file.open("facebook.txt");
		/*while(!file.eof())
		{
			file>>femail;
			if(femail==email)
			{
				cout<<"user already exists";
				return false;
			}
		}
		file.open("facebook.txt");*/
		file<<femail<<" "<<fpass<<" "<<f<<"-"<<_lname<<" "<<dob<<endl;
		cout <<femail<<" "<<fpass<<" "<<f<<"-"<<_lname<<" "<<dob<<endl;
		file.close();
	}


	//int phone;







};

