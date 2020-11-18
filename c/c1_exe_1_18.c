#include <stdio.h>

int getCleanedLine(char line[], char clean[], int limit);

void copyLine(char to[], char from[]);

int main()
{
	char lines[100][100];
	char currentLine[100];
	char currentLineCleaned[100];
	int lengthOfCurrentLine;

	while ((lengthOfCurrentLine = getCleanedLine(currentLine, currentLineCleaned, 100)) >= 0) {
		printf(
			"Line '%s' when cleaned '%s' has %d characters before the blanks\n", 
			currentLine, currentLineCleaned, lengthOfCurrentLine
		);
	}

	return 0;
}

int getCleanedLine(char line[], char cleanedLine[], int limit)
{
	char character;
	int i;
	int lineSize = 0;
	char blankSequences[limit];

	// for every character
	for (i = 0; i < limit - 1 && (character = getchar()) != EOF && character != '\n'; i++) {
		// if the character is not a space, tab add the character to the line.
		printf("Char: %c ", character);
		line[i] = character;
		if (character != ' ' && character != '\t') {
			printf("Non empty char\n");
			// Check if the hold array contains any values
			// If any character not a space or tab comes up, add the entire 'hold' array to the line.
			if (blankSequences[0] != '\0') {
				int j;
				for (j = i; j < limit - 1; j++) {
					if (blankSequences[j] == ' ' || blankSequences[j] == '\t') {
						cleanedLine[j] = blankSequences[j];
						++lineSize;
					}
				}
			}

			cleanedLine[i] = character;
			++lineSize;
			// blankSequences[0] = '\0';
		} 
		// If the next character is the end of the line, don't add the hold array. Discard it.
		
		// If the character is a space or tab, add it to a temporal "hold" array
		else {
			printf("Empty char\n");
			blankSequences[i] = character;
		}
	}


	// if (character == '\n') {
	// 	line[i] = character;
	// 	cleanedLine[lineSize] = character;
	// 	// ++lineSize;
	// }

	line[i] = '\0';
	// cleanedLine[lineSize] = '\0';

	printf("size: %d\n", lineSize);

	return lineSize;
}
