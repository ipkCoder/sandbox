
#include <iostream>
#include <string>
#include <cstdlib>
#include <cctype> // isdigit
using namespace std;

bool is_number(const string &sNumber)
{
  int i;
  for (i = 0; i < sNumber.length(); i++) {
    if (!isdigit(sNumber[i])) {
      return false;
    }
  }
  return true;
}

class Integer
{

  friend ostream& operator<<(ostream &cout, const Integer &n);
  friend int operator+(const Integer &n1, const Integer &n2);
protected:
  int number;
  
public:
  Integer();
  Integer(int n);
  Integer(const char &sNum);
  int getNumber();
  void print() const;
};

Integer::Integer()
{
  number = 0;
}
Integer::Integer(int n)
{
  number = n;
}
int Integer::getNumber()
{
  return number;
}
void Integer::print() const
{
  cout << number;
}
ostream& operator<<(ostream &cout, const Integer &n)
{
  cout << n.getNumber();
  return cout;
}
int operator+(const Integer &n1, const Integer &n2)
{
  return n1.getNumber)() + n2.getNumber();
}
/*
bool is_number(const sting &sNumber)
{
  int i;
  for (i = 0; i < sNumber.length; i++) {
    if (!isdigit(sNumber[i])) {
      return false;
    }
  }
  return true;
}
*/
int main()
{
  Integer i;
  Integer i2(2);
  Integer i3;
  i3 = i + i2;
  cout << i << i2 << i3 << endl;
}