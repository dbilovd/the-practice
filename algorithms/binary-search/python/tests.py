import unittest
from iteration import binarySearch as bsByIteration
from recursion import binarySearch as bsByRecursion

class TestBinarySearchAlgorithms(unittest.TestCase):
	def test_bs_by_iteration(self):
		arr = [1,2,3,4,5,6,7,8,9,10]
		self.assertEqual(bsByIteration(15, arr), -1)
		self.assertEqual(bsByIteration(6, arr), 5)

	def test_bs_by_recursion(self):
		arr = [1,2,3,4,5,6,7,8,9,10]
		self.assertEqual(bsByIteration(15, arr), -1)
		self.assertEqual(bsByIteration(6, arr), 5)

if __name__ == '__main__':
	unittest.main()