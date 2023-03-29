<?php
class Signature
{
    private string $_dateSignature;
    private Equipe $_equipe; // Un joueur signe pour UNE équipe
    private Joueur $_joueur;  // un JOUEUR sign pour une équipe

    public function __construct(string $dateSignature, Equipe $equipe, Joueur $joueur)
    {
        $this->_dateSignature = $dateSignature;
        $this->_equipe = $equipe;
        $this->_joueur = $joueur;
    }
	public function get_dateSignature(): string 
    {
		return $this->_dateSignature;
	}
	public function set_dateSignature(string $_dateSignature): self 
    {
		$this->_dateSignature = $_dateSignature;
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