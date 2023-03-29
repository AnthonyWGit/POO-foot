<?php
class Signature
{
    private string $_creationSignature; //C'est l'année où le joueur a commencé à jouer pour l'équipe X
    private Equipe $_equipe; // Un joueur signe pour UNE équipe
    private Joueur $_joueur;  // un JOUEUR sign pour une équipe

    public function __construct(string $creationSignature, Equipe $equipe, Joueur $joueur)
    {
        $this->_creationSignature = $creationSignature;
        $this->_equipe = $equipe;
        $this->_joueur = $joueur;
        $this->_equipe->ajouterSignature($this);
        $this->_joueur->ajouterSignature($this);
    }
	public function get_creationSignature(): string 
    {
		return $this->_creationSignature;
	}
	public function set_creationSignature(string $_creationSignature): self 
    {
		$this->_creationSignature = $_creationSignature;
		return $this;
	}
	public function get_equipe(): Equipe 
    {
		return $this->_equipe;
	}
	public function set_equipe(Equipe $_equipe): self 
    {
		$this->_equipe = $_equipe;
		return $this;
    }
	public function get_joueur(): Joueur
    {
		return $this->_joueur;
	}
	public function set_joueur(Joueur $_joueur): self 
    {
		$this->_joueur = $_joueur;
		return $this;
	}
}