#include <stdio.h>

int power (int number, int exponent)
{
	int result = 1;
	// if (exponent == 0) {
	// 	return 1;
	// }

	// if (exponent == 1) {
	// 	return number;
	// }

	for (int i = 1; i <= exponent; i++) {
		result = result * number;
	}
	return result;
}

int main()
{
	int i;

	for (i = 0; i < 10; i++) {
		printf("%d - %d\n", i, power(2, i));
	}

	return 0;
}