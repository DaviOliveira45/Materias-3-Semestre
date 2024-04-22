package heranca;

public class Main {
    public static void main(String[] args) {

        Animal animal = new Animal();
        Cachorro cachorro = new Cachorro();

        animal.setNome("Xicungunha");
        animal.setIdade(100000);
        animal.setSexo("Masculino");

        cachorro.setPorte("Medio");
        cachorro.setRaca("Pastor Alemão");
        cachorro.setNome("Walder");
        cachorro.setSexo("Masculino");
        cachorro.setIdade(7);

        cachorro.buscarOsso();

        System.out.println(animal);
        System.out.println(cachorro);


    }
}
