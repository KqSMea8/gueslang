#include <iostream>
using namespace std;

void insertionSort(int* array, int length) {
  int j;
  for (int i=1; i<length; i++) {
  	j = i;
  	while (j>0 && array[j-1] >array[j]) {
  		int temp = array[j];
  		array[j] = array[j-1];
  		array[j-1] = temp;
  		j--;
  	}
  }
}

int main() {
  int a [] = {10,9, 8, 7, 6, 5, 4, 3, 2, 1};
	int length = sizeof(a)/sizeof(int);
	insertionSort(a, length);
	for (int i=0; i<length; i++) {
		cout << a[i]<<" ";
	}
}