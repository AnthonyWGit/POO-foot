<?php 
class Equipe
{
    private string $_nomEquipe;
    private string $_dateDeCreation;
    private array $_joueurs;  //Une équipe a PLUSIEURS joueurs
    private string $_pays;
    public function __construct(string $nomEquipe, string $dateCreation,/*array $joueurs,*/ string $pays)
    {
        $this->_nomEquipe = $nomEquipe;
        $this->_dateDeCreation = $dateCreation;
        $this->_joueurs = [];
        $this->_pays = $pays;
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
	public function getPays(): string {
		return $this->_pays;
	}
	public function setPays(string $pays): self {
		$this->_pays = $pays;
		return $this;
	}
    public function ajouterJoueur(Joueur $joueur)
    {
        $this->_joueurs[] = $joueur;
    }
    
    public function afficherJoueur()
    {
        $result = "Joueurs du ".$this->_nomEquipe. "<br>";
        foreach ($this->_joueurs as $joueur)
            {
                $result.= $joueur->get_nomJoueur(). " ". $joueur->get_prenomJoueur(). " Nationalité : ". $joueur->getNationalite();
            }
        return $result;
    }
}