#include <stdio.h>

#define LOWER 0
#define UPPER 100
#define STEP  10

main()
{
  float fahr, celc;
  
  printf("Celc to Fahr\n");

  // while (celc <= upper) {
  //   fahr = ((9.0/5.0) * celc) + 32.0;
  //   printf("%3.0f %6.2f\n", celc, fahr);
  //   celc = celc + step;
  // }

  for (celc = LOWER; celc <= UPPER; celc = celc + STEP) {
    fahr = ((9.0/5.0) * celc) + 32.0;
    printf("%3.0f %6.2f\n", celc, fahr);
  }
}

