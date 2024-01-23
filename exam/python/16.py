class Vehicle:
    def __init__(self,make):
        self.make=make
class Car(Vehicle):
    def __init__(self,make,model,year):
        super().__init__(make)
        self.model=model
        self.year=year
    def display(self):
        print(f"{self.make} {self.model} of year {self.year}")
class ElectricCar(Car):
    def __init__(self,make,model,year,battery_capacity,charging_time):
        super().__init__(make,model,year)
        self.battery_capacity=battery_capacity
        self.charging_time=charging_time
    def displayev(self):
        print(f"{self.make} {self.model} of year {self.year} has battery capacity of {self.battery_capacity} and a charging time of {self.charging_time}")
evcar=ElectricCar('tesla','model v','2023','400kah','6 hours')
evcar.displayev()