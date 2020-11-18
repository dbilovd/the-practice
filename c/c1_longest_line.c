#include <stdio.h>
#define MAXLENGTH 100

int getLine(char line[], int maxLine);

void copy(char to[], char from[]);

int main ()
{
	char line[MAXLENGTH];
	char longLine[MAXLENGTH];
	char character;
	int currentLineLength = 0;
	int longestLine = 0;

	/*
	while((character = getchar()) != EOF) {
		if (character != '\n') {
			line[currentLineLength] = character;
			++currentLineLength;
		} else {
			currentLineLength = 0;
		}

		if (currentLineLength > longestLine) {
			longestLine = currentLineLength;
		}
	}
	*/

	while ((currentLineLength = getLine(line, MAXLENGTH))) {
		if (currentLineLength > longestLine) {
			longestLine = currentLineLength;
			copy(longLine, line);
		}
	}

	printf("Longest line has %d characters\n", longestLine);
	printf("Line: %s\n", longLine);
	return 0;
}

/**
 * Get a line, return it's length
 */
int getLine(char string[], int limit)
{
	int character, i;

	for (i = 0; i < limit - 1 && (character = getchar()) != EOF && character != '\n'; ++i) {
		string[i] = character;
	}

	if (character == '\n') {
		string[i] = character;
		++i;
	}

	string[i] = '\0';

	return i;
}

/**
 * Copy an array of chars to another array
 */
void copy(char to[], char from[])
{
	int i = 0;
	while((to[i] = from[i]) != '\0') {
		++i;
	}
}
