<?php 
class Equipe
{
    private string $_nomEquipe;
    private string $_dateDeCreation;
    private array $_joueurs = [];  //Une équipe a PLUSIEURS joueurs
    private Pays $_pays; //L'EQUIPE NE BOUGE PAS DE PAYS 
    private array $_signatures = [];
    public function __construct(string $nomEquipe, string $dateCreation,/*array $joueurs,*/ Pays $pays)
    {
        $this->_nomEquipe = $nomEquipe;
        $this->_dateDeCreation = $dateCreation;
        $this->_joueurs = [];
        $this->_pays = $pays;
        $this->_pays->ajouterEquipes($this);

    }
	public function get_nomEquipe(): string 
    {
		return $this->_nomEquipe;
	}
	public function set_nomEquipe(string $_nomEquipe): self
    {
		$this->_nomEquipe = $_nomEquipe;
		return $this;
	}
	public function get_dateDeCreation(): string 
    {
		return $this->_dateDeCreation;
	}
	public function set_dateDeCreation(string $_dateDeCreation): self 
    {
		$this->_dateDeCreation = $_dateDeCreation;
		return $this;
	}
	public function get_joueurs(): array 
    {
		return $this->_joueurs;
	}
	public function set_joueurs(array $_joueurs): self 
    {
		$this->_joueurs = $_joueurs;
		return $this;
	}
	public function getPays(): Pays {
		return $this->_pays;
	}
	public function setPays(Pays $pays): self {
		$this->_pays = $pays;
		return $this;
	}
    public function ajouterJoueur(Joueur $joueur)
    {
        $this->_joueurs[] = $joueur;
    }
    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }
    public function afficherJoueur()
    {
        $result = "Joueurs du ".$this->_nomEquipe. "<br>";
        foreach ($this->_signatures as $signature)
            {
                $result.= $signature->get_joueur()->get_nomJoueur(). " ";
                $result.= $signature->get_joueur()->get_prenomJoueur()." ";
                $result.= "Nationalité : ". $signature->get_joueur()->getNationalite()." <br>";
            }
        return $result;
    }
}