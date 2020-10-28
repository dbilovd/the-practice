#include <stdio.h>

main()
{
  float fahr, celc;
  int lower, upper, step;

  lower = 0;
  upper = 300;
  step = 20;

  fahr = lower;
  printf("Fahr   Celc\n");
  while (fahr <= upper) {
    celc = (5.0/9.0) * (fahr-32.0);
    printf("%3.0f %6.2f\n", fahr, celc);
    fahr = fahr + step;
  }
}

