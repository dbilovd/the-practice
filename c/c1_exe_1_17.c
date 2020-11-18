#include <stdio.h>
#define MAXPOSLINES	10
#define MAXLENGTH 	200
#define MINLENGTH 	10

int getLine(char line[], int maxLine);

void copy(char to[], char from[]);

int main ()
{
	char longLines[MAXPOSLINES][MAXLENGTH];
	int longLinesLengths[MAXPOSLINES];
	char line[MAXLENGTH];

	int currentLineLength = 0;
	int longestLine = 0;
	int lineNumber = 0;

	while ((currentLineLength = getLine(line, MAXLENGTH)) > 0) {
		if (currentLineLength > MINLENGTH) {
			copy(longLines[lineNumber], line);
			longLinesLengths[lineNumber] = currentLineLength;
			++lineNumber;
		}
	}

	printf("There are %d lines longer than %d characters\n", lineNumber, MINLENGTH);
	for(int i = 0; i < lineNumber; i++) {
		printf("%d character. Line: %s\n", longLinesLengths[i], longLines[i]);
	}
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
