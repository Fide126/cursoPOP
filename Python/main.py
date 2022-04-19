from email.utils import collapse_rfc2231_value
from car import Car
from account import Account

if __name__ == "__main__":
    
    Car = Car("AMSH6", Account ("Andres Herrera", "ANHERR1995"))
    print(vars(Car))
    print(vars(Car.driver))
    
