public class Personagem
{
    public int PersonagemId { get; set;}
    public string? PersonagemName  { get; set;}
    public string? Class { get; set;}
    public string? Element { get; set;}
    public int HitPoints { get; set;}
    public double HP { get; set;}
    public string? Weakness { get; set;}
    public List<String>? Skills { get; set;}


    Personagem(int PersonagemId, string PersonagemName, string Classe, string Element, int HitPoints, int HP, string Weakness, List<String> Skills){
        this.PersonagemId = PersonagemId;
        this.PersonagemName = PersonagemName;
        this.Class = Classe;
        this.Element = Element;
        this.HitPoints = HitPoints;
        this.HP = HP;
        this.Weakness = Weakness;
        this.Skills = Skills;
    }

    
}