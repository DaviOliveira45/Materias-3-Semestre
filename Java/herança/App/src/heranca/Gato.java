package heranca;

public class Gato extends Animal{
    

    private String pelagem;
    private boolean cacando = false;


    public void mudarCacando(){
        if (this.getCacando() == false) {
            this.setCacando(true);
        }
        if (this.getCacando() == true) {
            this.setCacando(false);
        }
    }

    public void setPelagem(String pelagem){
        this.pelagem = pelagem;
    }

    public void setCacando(boolean cacando){
        this.cacando = cacando;
    }

    public String getPelagem(){
        return this.pelagem;
    }

    public boolean getCacando(){
        return this.cacando;
    }
}
