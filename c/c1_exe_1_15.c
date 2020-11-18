#include <stdio.h>

#define LOWER	0
#define UPPER	100
#define STEP	10


int c2fh (float celcius){
	return ((9.0/5.0) * celcius) + 32.0;
}

int fh2c (float fahr)
{
    return  (5.0/9.0) * (fahr -32.0);
}

int main ()
{
	float fahr, celc;
  	printf("Celc to Fahr\n");

  	for (celc = LOWER; celc <= UPPER; celc = celc + STEP) {
  		fahr = c2fh(celc);
    	printf("%3.0f %6.2f\n", celc, fahr);
  	}

  	printf("Fahr to Celc\n");

  	for (fahr = LOWER; fahr <= UPPER; fahr = fahr + STEP) {
  		celc = fh2c(fahr);
    	printf("%6.2f %3.0f\n", fahr, celc);
  	}

	return 0;
}