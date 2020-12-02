import unittest

from implementation import generate_continuous_array_subsets

class TestArraySubsetGeneration(unittest.TestCase):
	def test_array_subsets_generated(self):
		original = [1,2,3]
		expected = [
			[1,2,3],
			[1,2],
			[1],
			[2,3],
			[2],
			[3]
		]
		result = generate_continuous_array_subsets(original)
		
		self.assertEquals(expected, result)

if __name__ == '__main__':
	unittest.main()