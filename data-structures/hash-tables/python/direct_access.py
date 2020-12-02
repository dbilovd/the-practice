
class HashTable:
	items = []

	def insert(self, item, key = None):
		if key:
			self.items[key] = item
		else:
			self.items.append(item)

		return key if key else len(self.items) - 1

	def size(self):
		return len(self.items)

	def search(self, key):
		if len(self.items) >= key + 1:
			return self.items[key]
		return False

