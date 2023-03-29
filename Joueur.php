<?php 
class Joueur
{
    //Propriétés
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private DateTime $_ddn;
    private array $_signatures = []; //On retrouvera les equipes dont les joueurs font parti avec les signatures
    private string $_nationalite;
    //Intialisation
    public function __construct(string $nomJoeur, string $prenomJoueur, DateTime $ddn, string $nationalite)
    {
        $this->_nomJoueur = $nomJoeur;
        $this->_prenomJoueur = $prenomJoueur;
        $this->_ddn = $ddn;
        $this->_nationalite = $nationalite;
    }
//____________________________________SETTERS________________________________

	public function set_nomJoueur(string $nomJoueur): self 
    {
		$this->_nomJoueur = $nomJoueur;
		return $this;
	}
    	public function set_prenomJoueur(string $prenomJoueur): self 
    {
		$this->_prenomJoueur = $prenomJoueur;
		return $this;
	}
    	public function set_ddn(DateTime $ddn): self 
    {
		$this->_ddn = $ddn;
		return $this;
	}
    public function set_nationalite(string $nationalite)
    {   
        $this->_nationalite = $nationalite;
    }
    //__________________________________GETTERS________________
	public function get_nomJoueur(): string 
    {
		return $this->_nomJoueur;
	}
	public function get_prenomJoueur(): string 
    {
		return $this->_prenomJoueur;
	}

	public function get_ddn(): DateTime
    {
		return $this->_ddn;
	}

    public function getNationalite()
    {
        return $this->_nationalite;
    }
//____________________________________METHODES_______________________________________
    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }
    public function afficherSignatures()
    {
        $result = "Le joueur ".$this->_prenomJoueur. " ". $this->_nomJoueur." a joué dans les équipes suivantes : <br>";
        $aujourdhui = (date('d-m-Y'));
        $diff = date_diff(($this->_ddn), date_create($aujourdhui));
        $result .= "Age : ". $diff->format("%Y") ." - ". $this->_nationalite ." <br>"; //Attention au format : Y pour les années à 4 chiffres : voir doc

        foreach ($this->_signatures as $signature)
        {
            $result .= $signature->get_equipe()->get_nomEquipe(). " (".$signature->get_creationSignature().") <br>";
        }
        return $result;
    }
    public function __toString() : string
    {
        $result .= $this->_nomJoueur. " ".$this->_prenomJoueur." ". $this->_nationalite;
        return $result;
    }
}