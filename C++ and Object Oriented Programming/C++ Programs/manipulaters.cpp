#include<iostream>
#include<iomanip>

int main(int argc, char** argv)
{
	int a =123;
	int b = 12345;
	int c = 1234;
	std::cout<<"A = "<<setw(5)<<a<<endl;
	std::cout<<"B = "<<setw(5)<<b<<endl;
	std::cout<<"C = "<<setw(5)<<c<<endl;
}

