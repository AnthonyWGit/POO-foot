<?php 
class Joueur
{
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private string $_ddn;
    private array $_equipes = []; //Un joueur peut jouer dans plusieurs équipes ou UNE 
    private string $_nationalite;
    public function __construct(string $nomJoeur, string $prenomJoueur, string $ddn, string $nationalite)
    {
        $this->_nomJoueur = $nomJoeur;
        $this->_prenomJoueur = $prenomJoueur;
        $this->_ddn = $ddn;
        $this->_nationalite = $nationalite;
    }

	public function get_nomJoueur(): string 
    {
		return $this->_nomJoueur;
	}
	public function set_nomJoueur(string $_nomJoueur): self 
    {
		$this->_nomJoueur = $_nomJoueur;
		return $this;
	}
	public function get_prenomJoueur(): string 
    {
		return $this->_prenomJoueur;
	}
	public function set_prenomJoueur(string $_prenomJoueur): self 
    {
		$this->_prenomJoueur = $_prenomJoueur;
		return $this;
	}
	public function get_ddn(): string 
    {
		return $this->_ddn;
	}
	public function set_ddn(string $_ddn): self 
    {
		$this->_ddn = $_ddn;
		return $this;
	}
	public function get_equipes(): array 
    {
		return $this->_equipes;
	}
	public function set_equipes(array $_equipes): self 
    {
		$this->_equipes = $_equipes;
		return $this;
	}
    public function getPays()
    {
        return $this->_pays;
    }
    public function ajouterEquipes(Equipe $equipe)
    {
        $this->_equipes[] = $equipe;
    }

    public function __toString() : string
    {
        $result .= $this->_nomJoueur. " ".$this->_prenomJoueur." ". $this->_nationalite;
        return $result;
    }
}