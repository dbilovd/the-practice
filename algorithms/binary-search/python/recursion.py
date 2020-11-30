from math import floor

def binarySearch(search, array, minIndex = 0, maxIndex = None):
	if maxIndex == None:
		maxIndex = len(array) - 1

	if minIndex > maxIndex:
		return -1

	midIndex = floor(minIndex + (maxIndex - minIndex) / 2)
	midValue = array[midIndex]
	if search == midValue:
		return midIndex
	elif search > midValue:
		return binarySearch(search, array, midIndex + 1, maxIndex)
	else: # search < midValue
		return binarySearch(search, array, minIndex, midIndex - 1)
