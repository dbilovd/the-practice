from math import floor

def binarySearch (value, array):
	minIndex = 0
	maxIndex = len(array) - 1
	while minIndex <= maxIndex:
		midIndex = floor(minIndex + (maxIndex - minIndex) / 2)
		midValue = array[midIndex]
		if value == midValue:
			return midIndex
		elif value > midValue:
			minIndex = midIndex + 1
		elif value < midValue:
			maxIndex = midIndex - 1

	return -1
