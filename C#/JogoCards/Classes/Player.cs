using System.Collections;

public class Player
{
    public int PlayerId { get; set; }
    public string? PlayerName { get; set;}
    public int PlayerLevel { get; set; }
    public double Balance { get; set; }
    public int Coins { get; set; }
    public int Mana { get; set; }
    public int Xp { get; set; }
    public Deck Deck { get; set; }


    Player(int PlayerId, string PlayerName, Deck Deck){
        this.PlayerName = PlayerName;
        this.PlayerLevel = 1;
        this.Balance = 0.00;
        this.Coins = 0;
        this.Mana = 5;
        this.Xp = 0;
        this.Deck = Deck;
    }


    // Funções relacionadas ao player

    public void WinCoins(int CoinsWin){
        this.Coins += CoinsWin;
    }

    public void LoseCoins(int CoinsLose){
        this.Coins -= CoinsLose;
    }

    public void WinXP(int Xp){
        this.Xp += Xp;
    }

    public void UpLevel(){

        int experienceRequired = (this.PlayerLevel + 1) * 2000;
    
        if (this.Xp >= experienceRequired)
        {
            this.PlayerLevel++; 
            this.Xp -= experienceRequired;
        }
    }
    
}