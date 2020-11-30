def bubble_sort(arr, runs = None):
	"""
	- keep list of unsorted length of array. Should be entire list the first time
	- while the sorted lenght > 0, repeat the following steps
	- bubble a single item to the farthest it can go and decrease sorted link by 1 
	"""	
	length_to_sort = runs if runs else len(arr)
	while length_to_sort > 0:
		i = 0
		while i < len(arr) - 1: # < -1 DON'T compare  the last element
			value_at_i = arr[i]
			value_after_i = arr[i + 1]
			if value_at_i > value_after_i:
				temp = value_after_i
				arr[i + 1] = value_at_i
				arr[i] = temp
			i += 1
		length_to_sort -= 1
	return arr