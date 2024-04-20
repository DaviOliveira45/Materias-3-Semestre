using Microsoft.AspNetCore.SignalR;
using Microsoft.Net.Http.Headers;

public class Card
{
    public int CardId { get; set;}
    public string? CardName  { get; set;}
    public string? TypeCard { get; set;}
    public string? Element { get; set;}
    public double Damage { get; set;}
    public int ManaCost { get; set;}
    public double TaxaDrop { get; set;}


    Card(int CardId, string CardName, string Element, double Damage, int ManaCost, double TaxaDrop){
        this.CardId = CardId;
        this.CardName = CardName;
        this.Element = Element;
        this.Damage = Damage;
        this.ManaCost = ManaCost;
        this.TaxaDrop = TaxaDrop;
    }


    // Funções relacionadas aos cards:


    // Função para aplicar dano aos personagens
    public void ApllyDamage(Personagem Target){
        if (this.TypeCard == "Ataque")
        {
            if(Target.Weakness == this.Element)
            {
                Target.HP -= (this.Damage * 1.1);
            }else{
                Target.HP -= this.Damage;
            }
        }
    }


    // Função para restaurar vida dos personagens durante batalhas
    public void RecoverLife(Personagem Target){
        if (this.TypeCard == "Cura")
        {
            Target.HP += this.Damage;
        }
    }


    // Função para resetar a vida dos personagens antes de começar as batalhas
    public void ResetLifeForBattle(Personagem Target){
        Target.HP = Target.HitPoints;
    }
}