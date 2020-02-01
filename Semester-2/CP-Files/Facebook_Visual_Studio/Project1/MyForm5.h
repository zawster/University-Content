#pragma once
#include <string>
#include <string.h>
#include "UserClass.h"
#include "MyForm2.h"
#include "MyForm.h"

namespace Project1 {

	using namespace System;
	using namespace System::ComponentModel;
	using namespace System::Collections;
	using namespace System::Windows::Forms;
	using namespace System::Data;
	using namespace System::Drawing;

	/// <summary>
	/// Summary for MyForm5
	/// </summary>
	public ref class MyForm5 : public System::Windows::Forms::Form
	{
	public:
		MyForm5(void)
		{
			InitializeComponent();
			//
			//TODO: Add the constructor code here
			//
		}

	protected:
		/// <summary>
		/// Clean up any resources being used.
		/// </summary>
		~MyForm5()
		{
			if (components)
			{
				delete components;
			}
		}

	protected: 
	private: System::Windows::Forms::TextBox^  textBox5;
	private: System::Windows::Forms::TextBox^  textBox3;
	private: System::Windows::Forms::TextBox^  textBox2;
	private: System::Windows::Forms::TextBox^  textBox1;
	private: System::Windows::Forms::Button^  button1;
	private: System::Windows::Forms::TextBox^  textBox4;
	private: System::Windows::Forms::TextBox^  textBox6;
	private: System::Windows::Forms::Label^  label1;
	private: System::Windows::Forms::Button^  button2;
	private: System::Windows::Forms::Button^  button3;


	private:
		/// <summary>
		/// Required designer variable.
		/// </summary>
		System::ComponentModel::Container ^components;

#pragma region Windows Form Designer generated code
		/// <summary>
		/// Required method for Designer support - do not modify
		/// the contents of this method with the code editor.
		/// </summary>
		void InitializeComponent(void)
		{
			this->textBox5 = (gcnew System::Windows::Forms::TextBox());
			this->textBox3 = (gcnew System::Windows::Forms::TextBox());
			this->textBox2 = (gcnew System::Windows::Forms::TextBox());
			this->textBox1 = (gcnew System::Windows::Forms::TextBox());
			this->button1 = (gcnew System::Windows::Forms::Button());
			this->textBox4 = (gcnew System::Windows::Forms::TextBox());
			this->textBox6 = (gcnew System::Windows::Forms::TextBox());
			this->label1 = (gcnew System::Windows::Forms::Label());
			this->button2 = (gcnew System::Windows::Forms::Button());
			this->button3 = (gcnew System::Windows::Forms::Button());
			this->SuspendLayout();
			// 
			// textBox5
			// 
			this->textBox5->BackColor = System::Drawing::SystemColors::Control;
			this->textBox5->Location = System::Drawing::Point(338, 238);
			this->textBox5->Name = L"textBox5";
			this->textBox5->Size = System::Drawing::Size(231, 20);
			this->textBox5->TabIndex = 9;
			this->textBox5->Text = L"Email or Phone Number";
			this->textBox5->TextChanged += gcnew System::EventHandler(this, &MyForm5::textBox5_TextChanged);
			// 
			// textBox3
			// 
			this->textBox3->BackColor = System::Drawing::SystemColors::Control;
			this->textBox3->Location = System::Drawing::Point(338, 274);
			this->textBox3->Name = L"textBox3";
			this->textBox3->Size = System::Drawing::Size(231, 20);
			this->textBox3->TabIndex = 8;
			this->textBox3->Text = L"Date of Birth";
			this->textBox3->TextChanged += gcnew System::EventHandler(this, &MyForm5::textBox3_TextChanged);
			// 
			// textBox2
			// 
			this->textBox2->BackColor = System::Drawing::SystemColors::Control;
			this->textBox2->Location = System::Drawing::Point(338, 200);
			this->textBox2->Name = L"textBox2";
			this->textBox2->Size = System::Drawing::Size(231, 20);
			this->textBox2->TabIndex = 7;
			this->textBox2->Text = L"Last Name";
			this->textBox2->TextChanged += gcnew System::EventHandler(this, &MyForm5::textBox2_TextChanged);
			// 
			// textBox1
			// 
			this->textBox1->BackColor = System::Drawing::SystemColors::Control;
			this->textBox1->ForeColor = System::Drawing::SystemColors::InactiveCaptionText;
			this->textBox1->Location = System::Drawing::Point(338, 160);
			this->textBox1->Name = L"textBox1";
			this->textBox1->Size = System::Drawing::Size(231, 20);
			this->textBox1->TabIndex = 6;
			this->textBox1->Text = L"First Name";
			this->textBox1->TextChanged += gcnew System::EventHandler(this, &MyForm5::textBox1_TextChanged);
			// 
			// button1
			// 
			this->button1->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(0)), static_cast<System::Int32>(static_cast<System::Byte>(0)), 
				static_cast<System::Int32>(static_cast<System::Byte>(64)));
			this->button1->FlatStyle = System::Windows::Forms::FlatStyle::Flat;
			this->button1->ForeColor = System::Drawing::SystemColors::ButtonHighlight;
			this->button1->Location = System::Drawing::Point(405, 402);
			this->button1->Name = L"button1";
			this->button1->Size = System::Drawing::Size(96, 31);
			this->button1->TabIndex = 11;
			this->button1->Text = L"Sign Up";
			this->button1->UseVisualStyleBackColor = false;
			this->button1->Click += gcnew System::EventHandler(this, &MyForm5::button1_Click);
			// 
			// textBox4
			// 
			this->textBox4->BackColor = System::Drawing::SystemColors::Control;
			this->textBox4->Location = System::Drawing::Point(338, 311);
			this->textBox4->Name = L"textBox4";
			this->textBox4->Size = System::Drawing::Size(231, 20);
			this->textBox4->TabIndex = 12;
			this->textBox4->Text = L"Password";
			// 
			// textBox6
			// 
			this->textBox6->BackColor = System::Drawing::SystemColors::Control;
			this->textBox6->Location = System::Drawing::Point(338, 346);
			this->textBox6->Name = L"textBox6";
			this->textBox6->Size = System::Drawing::Size(231, 20);
			this->textBox6->TabIndex = 13;
			this->textBox6->Text = L"confrom password";
			// 
			// label1
			// 
			this->label1->AutoSize = true;
			this->label1->BackColor = System::Drawing::Color::FromArgb(static_cast<System::Int32>(static_cast<System::Byte>(0)), static_cast<System::Int32>(static_cast<System::Byte>(0)), 
				static_cast<System::Int32>(static_cast<System::Byte>(64)));
			this->label1->Font = (gcnew System::Drawing::Font(L"Microsoft Sans Serif", 27.75F, System::Drawing::FontStyle::Italic, System::Drawing::GraphicsUnit::Point, 
				static_cast<System::Byte>(0)));
			this->label1->ForeColor = System::Drawing::SystemColors::ButtonHighlight;
			this->label1->Location = System::Drawing::Point(288, 56);
			this->label1->Name = L"label1";
			this->label1->Size = System::Drawing::Size(355, 42);
			this->label1->TabIndex = 14;
			this->label1->Text = L"SOCIAL NETWORK";
			// 
			// button2
			// 
			this->button2->Location = System::Drawing::Point(808, 13);
			this->button2->Name = L"button2";
			this->button2->Size = System::Drawing::Size(75, 23);
			this->button2->TabIndex = 15;
			this->button2->Text = L"Close";
			this->button2->UseVisualStyleBackColor = true;
			this->button2->Click += gcnew System::EventHandler(this, &MyForm5::button2_Click);
			// 
			// button3
			// 
			this->button3->Location = System::Drawing::Point(415, 373);
			this->button3->Name = L"button3";
			this->button3->Size = System::Drawing::Size(75, 23);
			this->button3->TabIndex = 16;
			this->button3->Text = L"Save";
			this->button3->UseVisualStyleBackColor = true;
			this->button3->Click += gcnew System::EventHandler(this, &MyForm5::button3_Click);
			// 
			// MyForm5
			// 
			this->AutoScaleDimensions = System::Drawing::SizeF(6, 13);
			this->AutoScaleMode = System::Windows::Forms::AutoScaleMode::Font;
			this->BackColor = System::Drawing::SystemColors::Highlight;
			this->ClientSize = System::Drawing::Size(907, 508);
			this->Controls->Add(this->button3);
			this->Controls->Add(this->button2);
			this->Controls->Add(this->label1);
			this->Controls->Add(this->textBox6);
			this->Controls->Add(this->textBox4);
			this->Controls->Add(this->button1);
			this->Controls->Add(this->textBox5);
			this->Controls->Add(this->textBox3);
			this->Controls->Add(this->textBox2);
			this->Controls->Add(this->textBox1);
			this->FormBorderStyle = System::Windows::Forms::FormBorderStyle::None;
			this->Name = L"MyForm5";
			this->Text = L"MyForm5";
			this->Load += gcnew System::EventHandler(this, &MyForm5::MyForm5_Load);
			this->ResumeLayout(false);
			this->PerformLayout();

		}
#pragma endregion

		

	private: System::Void MyForm5_Load(System::Object^  sender, System::EventArgs^  e) {
			 }
private: System::Void textBox1_TextChanged(System::Object^  sender, System::EventArgs^  e) {
			
			 /// Text Box For Email
//			 string fname = textBox1->Text;
//			 UserClass user;
//			 user.Fname = fname ;

			


		 }
private: System::Void button2_Click(System::Object^  sender, System::EventArgs^  e) {

			 this->Close();
			 
		 }

private: System::Void button1_Click(System::Object^  sender, System::EventArgs^  e) {
			 
			

			 MyForm2^ login = gcnew MyForm2;
			 
			 

			 this->Hide();
			 login->Show();





			 }
private: System::Void textBox2_TextChanged(System::Object^  sender, System::EventArgs^  e) {
		 }
private: System::Void textBox5_TextChanged(System::Object^  sender, System::EventArgs^  e) {
		 }
private: System::Void textBox3_TextChanged(System::Object^  sender, System::EventArgs^  e) {
		 }
private: System::Void button3_Click(System::Object^  sender, System::EventArgs^  e) {

			 UserClass^ user = gcnew UserClass;  /// creating object of class UserClass
			//string *Fname;
			//string *Lname;
			//string *Email;
			//string *dateOfBirth;
			//string *password;
			 //// AS the save button is pressed all the values in the above fields are stores into their respective Variables;
			 String^ fname = textBox1->Text;
			 //textBox2->Text = myint;             // Checing to see if values are being stored or not
			 //user->Fname = fname->ToString();      // Assigning the class 


			 String^ lname = textBox2->Text;
			 //user->Lname = lname->ToString();

			 String^ email =  textBox3->Text;
			 //user->Email = email->ToString();

			 String^ dob = textBox4->Text;
			 //user->dateOfBirth = dob->ToString();

			 String^ pass = textBox5->Text;
			 //user->password = pass->ToString();

			 //string f = textBox1->Text->ToString();

			 user->getVals(fname,lname,dob,email,pass);
			 user->signup(fname,lname,dob,email,pass);

		 }
};
}
