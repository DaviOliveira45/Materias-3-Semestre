package herenca2;

import java.util.List;

public class Tabuleiro{

    static public void tabuleiro(int linhas, int colunas, Personagem jogador){

        for(int i = 0; i < linhas; i++){
            for(int j = 0; j < colunas; j++){
                if (i == jogador.getPosicaoX() && j == jogador.getPosicaoY()) {
                    System.out.print("[ " + jogador.getFigura() + " ]");
                }else{
                    System.out.print("[ . ]");
                }
            }

            System.out.println();
        }
        
    }


    static public void tabuleiro2(int linhas, int colunas, List<Personagem> personagens){

        for (int i = 0; i < linhas; i++) {
            for (int j = 0; j < colunas; j++) {
                boolean jogadorPresente = false;
                for (Personagem personagem : personagens) {
                    if (i == personagem.getPosicaoX() && j == personagem.getPosicaoY()) {
                        System.out.print("[ " + personagem.getFigura() + " ]");
                        jogadorPresente = true;
                        break;
                    }
                }
                if (!jogadorPresente) {
                    System.out.print("[ . ]");
                }
            }
            System.out.println();
        }
    }
}
