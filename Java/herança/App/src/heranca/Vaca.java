package heranca;

public class Vaca extends Animal{
    
    private String dieta;
    private String manchas;
    private boolean pastando = false;


    public void pastar(){
        if (pastando == false) {
            setPastando(true);
            System.out.println("A vaca foi pastar!");
        }else{
            setPastando(false);
            System.out.println("A vaca parou de pastar");
        }
    }

    public void produzirLeite(){
        System.out.println("A vaca está produzindo leite!");
    }


    @Override
    public String toString() {
        return "Vaca - [nome: " + this.getNome() + "] - [sexo: " + this.getSexo() + "] - [idade: " + this.getIdade() + "] - [dieta: " + this.getDieta() + "] - [manchas: " + this.getManchas() + "]";
    }



    public void setDieta(String dieta){
        this.dieta = dieta;
    } 
    
    public void setManchas(String manchas){
        this.manchas = manchas;
    }

    public void setPastando(boolean pastando){
        this.pastando = pastando;
    }

    public boolean getPastando(){
        return this.pastando;
    }

    public String getDieta(){
        return this.dieta;
    }

    public String getManchas(){
        return this.manchas;
    }
}