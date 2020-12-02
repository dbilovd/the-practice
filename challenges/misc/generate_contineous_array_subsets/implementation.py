def generate_continuous_array_subsets(array):
	"""
	- For each element in array
	- Splice array for item location to remaining items in the array
	- Reduce the length of items in remaining items and slice again,
	- Repeat this until the remaining items is the 0
	- add each slice to our subsets array to return
	"""
	array_length = len(array)
	i = 0
	subsets = []
	while i < array_length :
		remaining_items_length = array_length - i
		while remaining_items_length > 0:
			subset = array[i:(i + remaining_items_length)]
			subsets.append(subset)
			remaining_items_length -= 1
		i += 1
	return subsets