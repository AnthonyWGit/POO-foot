<?php
class Pays
{
    //Propriétés
    private string $_nomPays;
    private array $_equipes;
//Initialisation
    public function __construct(string $nomPays)
    {
        $this->_nomPays = $nomPays;
        $this->_equipes = [];
    }
    //__________________________________________________SETTERS__________________

	public function set_nomPays(string $_nomPays): self 
    {
		$this->_nomPays = $_nomPays;
		return $this;
	}
	public function set_equipes(array $_equipes): self 
    {
		$this->_equipes = $_equipes;
		return $this;
	}
    //__________________________________GETTERS______________________
	public function get_nomPays(): string
    {
		return $this->_nomPays;
	}

	public function get_equipes(): array 
    {
		return $this->_equipes;
	}
    //______________________METHODES_____________________________
    public function ajouterEquipes(Equipe $equipe)
    {
        $this->_equipes[] = $equipe;
    }
    public function afficherEquipes()
    {
                if ($this->_nomPays == "France")
                {
                    $result = '<div class = "carteEnsemble"><div class = "carte"><h3>'. $this->_nomPays. '</h3>';
                    $result .='<div class = "drapeau">
                    <img    alt = "Drapeau Français"
                            src = "Images/france.png"/>
                </div>';                    
                }
                else if ($this->_nomPays == "Espagne")
                {
                    $result = '<div class = "carte"><h3>'. $this->_nomPays ."</h3>";
                    $result.='
                    <div class = "drapeau">
                        <img    alt = "Drapeau Espagnol"
                                src = "Images/espagne.png"/>
                    </div>';                  
                }
                else if ($this->_nomPays == "Angleterre")
                {
                    $result = "<div class = 'carte'><h3>". $this->_nomPays ."</h3>";
                    $result.='
                <div class = "drapeau">
                    <img    alt = "Drapeau Anglais"
                            src = "Images/england.png"/>
                </div>';
                }
                else 
                {
                    $result = "<div class = 'carte'><h3>". $this->_nomPays ."</h3>";
                    $result.='
                <div class = "drapeau">
                    <img    alt = "Drapeau Italien"
                            src = "Images/italy.png"/>
                </div>';
                }

        foreach ($this->_equipes as $equipe)
        {
            $result.=$equipe->get_nomEquipe(). "<br>";
            if ($equipe == end($this->_equipes))
            {
                $result.="</div>";
                if ($this->_nomPays == "Italie")
                {
                    $result.=" </div>";                    
                }
            }
        }
        return $result;
    }
}