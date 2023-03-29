<?php 
class Joueur
{
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private string $_ddn;
    private array $_signatures = [];
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

    public function getNationalite()
    {
        return $this->_nationalite;
    }

    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }
    public function afficherSignatures()
    {
        $result = "Le joueur ".$this->_nomJoueur. " ". $this->_prenomJoueur." a joué dans les équipes suivantes : <br>";
        $anniversaire = new DateTime($this->_ddn);
        $aujourdhui = new DateTime(date('d-m-y'));
        $diff = $aujourdhui->diff($anniversaire);
        $result .="Age : ". $diff->format('%y'). " <br>";
        foreach ($this->_signatures as $signature)
        {
            $result .= $signature->get_equipe()->get_nomEquipe(). " <br>";
        }
        return $result;
    }
    public function __toString() : string
    {
        $result .= $this->_nomJoueur. " ".$this->_prenomJoueur." ". $this->_nationalite;
        return $result;
    }
}