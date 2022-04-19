package Java;

class Main {
    public static void main(String[] args) {
        Car car = new Car("AM34RW",new Account("Fidel villalba", "FVR1234"));
        car.pasajeros=4;
        car.printDataCar();

        Car car2 = new Car();
        car2.license="AM34RW";
        car2.driver="jesus lopez";
        car2.pasajeros=4;
        car2.printDataCar();

    }
}