package herenca2;

import java.util.ArrayList;
import java.util.List;

public class Main {
    public static void main(String[] args) {
        
        /* 
        Player jogador = new Player(0, 0, null);
        jogador.setPosicaoX(5);
        jogador.setPosicaoY(5);
        jogador.setFigura("X");
        */

        List<Personagem> jogadores = new ArrayList<>();
        jogadores.add(new Player(5,5,"X"));
        jogadores.add(new Inimigo(1,2,"O"));
        jogadores.add(new Inimigo(3,7,"O"));


        Tabuleiro.tabuleiro2(8,8, jogadores);

        



        /* 
        Scanner leitor = new Scanner(System.in);
        int opcao;

        do {
            
            System.out.println("------------");
            System.out.println("[1] - Subir");
            System.out.println("[2] - Descer");
            System.out.println("[3] - Direita");
            System.out.println("[4] - Esquerda");
            System.out.println("------------");

            opcao = Integer.parseInt(leitor.nextLine());

            switch (opcao) {
                case 1:
                    jogador.setPosicaoX(jogador.getPosicaoX() - 1);    
                break;

                case 2:
                    jogador.setPosicaoX(jogador.getPosicaoX() + 1);
                break;

                case 3:
                    jogador.setPosicaoY(jogador.getPosicaoY() + 1);
                break;

                case 4:
                    jogador.setPosicaoY(jogador.getPosicaoY() - 1);
                break;
            
                default:
                    System.out.println(">> Opção Inválida");
                break;
            }

            Tabuleiro.tabuleiro(8,8, jogador);
        } while (opcao != 0);
        */
    }
    
}
