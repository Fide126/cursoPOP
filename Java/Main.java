package Java;

class Main {
    public static void main(String[] args) {
        System.out.println("Informacion");
        UberX uberX = new UberX("AM34RW",new Account("Fidel villalba","FVRGG"),"Chevrolet", "Sonic");
        uberX.setPassenger(4);
        uberX.printDataCar();

        UberVan uberVan = new UberVan("ANDDJF", new Account("Andres herrera"));
        uberVan.setPassenger(6);
        uberVan.printDataCar();

    }
}