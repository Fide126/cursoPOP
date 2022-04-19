from email.utils import collapse_rfc2231_value
from car import Car

if __name__ == "__main__":
    
    Car = Car()
    Car.licencia ="ADJKS89"
    Car.driver = "Fidel villalba"
    print (vars(Car))
