<?php 
class Equipe
{
    //Propriétés
    private string $_nomEquipe;
    private int $_dateDeCreation;
    private Pays $_pays; //L'EQUIPE NE BOUGE PAS DE PAYS 
    private array $_signatures = []; // c'est via la Signature qu'on va retrouver les joueurs
    //Initalisation
    public function __construct(string $nomEquipe, int $dateCreation,/*array $joueurs,*/ Pays $pays)
    {
        $this->_nomEquipe = $nomEquipe;
        $this->_dateDeCreation = $dateCreation;
        $this->_pays = $pays;
        $this->_pays->ajouterEquipes($this);
    }
    //___________________________S E T T E R S_________________________________
	public function set_nomEquipe(string $_nomEquipe): self
    {
	    $this->_nomEquipe = $_nomEquipe;
		return $this;
	}
	public function set_dateDeCreation(int $_dateDeCreation): self 
    {
		$this->_dateDeCreation = $_dateDeCreation;
		return $this;
	}    
	public function setPays(Pays $pays): self {
		$this->_pays = $pays;
		return $this;
	}    
//____________________________GETTERS____________________________
    public function get_nomEquipe(): string 
    {
		return $this->_nomEquipe;
	}
	public function get_dateDeCreation(): int
    {
		return $this->_dateDeCreation;
	}

	public function getPays(): Pays 
    {
		return $this->_pays;
	}
    //______________________METHODES_____________________
    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }

    public function afficherJoueurs()
    {
        $result = "Joueurs du ".$this->_nomEquipe. "<br>";
        $result.= $this->_pays->get_nomPays() ." - " .$this->_dateDeCreation. "<br>";
        foreach ($this->_signatures as $signature)
            {
                $result.= $signature->get_joueur()->get_nomJoueur(). " ";
                $result.= $signature->get_joueur()->get_prenomJoueur()." ";
                $result.= "Nationalité : ". $signature->get_joueur()->getNationalite()." ";
                $result.= "Date de signature : ".$signature->get_creationSignature(). "<br>";
            }
        return $result;
    }
}