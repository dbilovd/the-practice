import unittest
from bubble_sort import bubble_sort

class TestBubbleSortAlgorithm(unittest.TestCase):
	def test_bubble_sort_sorts_an_array(self):
		original = [10,9,8,7,6,5,4,3,2,1]
		expected = [1,2,3,4,5,6,7,8,9,10]
		sort_result = bubble_sort(original)
		self.assertEqual(expected, sort_result)

	def test_bubble_sort_can_be_made_to_stop_after_a_number_of_runs(self):
		original = [21, 4, 1, 3, 9, 20, 25, 6, 21, 14] 
		expected = [1, 3, 4, 9, 6, 20, 14, 21, 21, 25]
		sort_result = bubble_sort(original, 3)
		self.assertEqual(expected, sort_result)

if __name__ == '__main__':
	unittest.main()