<?php 
class Joueur
{
    //Propriétés
    private string $_nomJoueur;
    private string $_prenomJoueur;
    private DateTime $_ddn;
    private array $_signatures = []; //On retrouvera les equipes dont les joueurs font parti avec les signatures
    private Pays $_nationalite;
    private string $_url;
    private string $_portrait;
    //Intialisation
    public function __construct(string $nomJoeur, string $prenomJoueur, DateTime $ddn, Pays $nationalite, string $url, string $portrait)
    {
        $this->_nomJoueur = $nomJoeur;
        $this->_prenomJoueur = $prenomJoueur;
        $this->_ddn = $ddn;
        $this->_nationalite = $nationalite;
        $this->_url = $url;
        $this->_portrait = $portrait;
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
    public function set_nationalite(Pays $nationalite)
    {   
        $this->_nationalite = $nationalite;
    }
	public function set_url(string $_url): self 
    {
		$this->_url = $_url;
		return $this;
	}
	public function set_portrait(string $_portrait): self 
    {
		$this->_portrait = $_portrait;
		return $this;
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
    public function get_nationalite() : Pays
    {
        return $this->_nationalite;
    }
	public function get_url(): string 
    {
        return $this->_url;            
	}
	public function get_portrait(): string 
    {
		return "<img    alt='Portrait". $this->_nomJoueur." '
                        src='".$this->_portrait. "'/>";
	}
//____________________________________METHODES_______________________________________
    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }
    public function afficherSignatures()
    {

        $result = '<a href ="'.$this->get_url()." ".$this->get_portrait().'</a>';
        $aujourdhui = (date('d-m-Y'));
        $diff = date_diff(($this->_ddn), date_create($aujourdhui));
        $result .= "Age : ". $diff->format("%Y") ." ans  - ". $this->_nationalite ." <br>"; //Attention au format : Y pour les années à 4 chiffres : voir doc        
        $result .= "Le joueur ".$this->_prenomJoueur. " ". $this->_nomJoueur." a joué dans les équipes suivantes : <br>";
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