package herenca2;

public class Player extends Personagem{

    private String figuraCor = "\u001B[1;33m" + "" + "\u001B[0m"; 

    public Player(int posicaoX, int posicaoY, String figura) {
        super(posicaoX, posicaoY, figura);
        this.figuraCor = "\u001B[1;33m" + figura + "\u001B[0m";
    }


    @Override
    public String getFigura(){
        return this.figuraCor;
    }
    
}
