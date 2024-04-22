package herenca2;

public class Inimigo extends Personagem{

    private String figuraCor = "\u001B[1;31m" + "" + "\u001B[0m";

    public Inimigo(int posicaoX, int posicaoY, String figura) {
        super(posicaoX, posicaoY, figura);
        this.figuraCor = "\u001B[1;31m" + figura + "\u001B[0m";
    }
    
    @Override
    public String getFigura(){
        return this.figuraCor;
    }
}
