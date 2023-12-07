class Time:
	def __init__(self, hour, minute, second):
		self.__hour = hour
		self.__minute = minute
		self.__second = second
	def __add__(self,other):
		totalseconds = self.__hour * 3600 + self.__minute * 60 + self.__second + other.__hour * 3600 + other.__minute * 60 + other.__second
		hours = totalseconds // 3600
		minutes = (totalseconds % 3600) // 60
		seconds = totalseconds % 60
		return Time(hours, minutes, seconds)
	def __str__(self):
		return "{:02d}:{:02d}:{:02d}".format(self.__hour, self.__minute, self.__second)
	
time1 = Time(10, 30, 45)
time2 = Time(2, 15, 20)

# Calculate and print the sum of the two times
sumtime = time1 + time2
print("Sum of time1 and time2:", sumtime)
