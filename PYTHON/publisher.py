class Publisher:
	def __init__(self, name):
		self.name = name

class Book(Publisher):
	def __init__(self, name, title, author):
		super().__init__(name)
		self.title = title
		self.author = author
	def display(self):
		print("Name : ",self.name)
		print("Title : ",self.title)
		print("Author : ",self.author)	

class Python(Book):
	def __init__(self, name, title, author, price, no_of_pages):
		super().__init__(name, title, author)
		self.price = price
		self.no_of_pages = no_of_pages
	def display(self):
		super().display()
		print("Price : ",self.price)
		print("No. of Pages : ",self.no_of_pages)	

pythonbook = Python(name="JK Books", title="Python for noobs", author="Dalbin", price=250, no_of_pages=140)
pythonbook.display()
