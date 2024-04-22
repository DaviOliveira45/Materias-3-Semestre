package herenca2;

public class Personagem {
    

    private int posicaoX;
    private int posicaoY;
    private String figura;
    
    public Personagem(int posicaoX, int posicaoY, String figura){
    this.posicaoX =posicaoX;
    this.posicaoY = posicaoY;
    this.figura = figura;
    }

    public void setPosicaoX(int posicaoX){
        this.posicaoX = posicaoX;
    }

    public void setPosicaoY(int posicaoY){
        this.posicaoY = posicaoY;
    }

    public void setFigura(String figura){
        this.figura = figura;
    }

    public int getPosicaoX(){
        return this.posicaoX;
    }

    public int getPosicaoY(){
        return this.posicaoY;
    }

    public String getFigura(){
        return this.figura;
    }
}
