import unittest

from direct_access import HashTable as DirectAccessHT
from hash_table import HashTable as HashTable
class TestHasTableImplementations(unittest.TestCase):

	def test_direct_access(self):
		daHashTable = DirectAccessHT()
		firstInsertKey = daHashTable.insert(10)
		secondInsertKey = daHashTable.insert(15)
		size = daHashTable.size()
		
		self.assertEqual(firstInsertKey, 0)
		self.assertEqual(secondInsertKey, 1)
		self.assertEqual(size, 2)

		daHashTable.insert(20)
		daHashTable.insert(25)

		self.assertEqual(daHashTable.search(0), 10)
		self.assertEqual(daHashTable.search(3), 25)
		self.assertEqual(daHashTable.search(5), False)

	def test_hash_table_has_returns_the_same_index_whenever_called(self):
		ht = HashTable(10)
		first = ht.hash("name")
		second = ht.hash("name")

		self.assertTrue(first != None)
		self.assertTrue(second != None)
		self.assertTrue(isinstance(first, int))
		self.assertTrue(isinstance(second, int))
		self.assertEqual(first, second)

if __name__ == '__main__':
	unittest.main()
