
class HashTable:
	size = 0
	items = []

	def __init__(self, size):
		self.size = size

	def hash(self, key, size = None):
		"""
		- count string, divide length of string by m and return the remainder
		"""
		size = size if size else self.size
		index = len(key) % size
		return index

	def add(self, key, value):
		hashed_index = self.hash(key)
		if self.items[hashed_index] == None:
			self.items[hashed_index] = []
		self.items[hashed_index].append(value)
		pass

	def exists(self, key):
		hashed_index = self.hash(key)
		if len(self.items) > hashed_index and self.items[hashed_index] != None :
			return True 
		return False

	def get(self, key):
		hashed_index = self.hash(key)
		if len(self.items) > hashed_index:
			return self.items[hashed_index]
		return False

	def remove(self, key):
		hashed_index = self.hash(key)
		self.items.pop(hashed_index)
		pass