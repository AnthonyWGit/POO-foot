<?php
class Pays
{
    //Propriétés
    private string $_nomPays;
    private array $_equipes;
    private string $_drapeauPays;
//Initialisation
    public function __construct(string $nomPays, string $drapeauPays)
    {
        $this->_nomPays = $nomPays;
        $this->_equipes = [];
        $this->_drapeauPays = $drapeauPays;
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
	public function set_drapeauPays(string $_drapeauPays): self 
    {
		$this->_drapeauPays = $_drapeauPays;
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
	public function get_drapeauPays(): string 
    {
        return "<img    alt = 'Drapeau ".$this->_nomPays."'
                        src = 'Images/". $this->_drapeauPays ."'/ >";
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
            $result = '<h3>'. $this->_nomPays. '</h3>';
            $result .='<div class = "drapeau">
                        <img    alt = "Drapeau Français"
                                src = "Images/france.png"/>
                        </div>';                    
        }
        else if ($this->_nomPays == "Espagne")
        {
            $result = '<h3>'. $this->_nomPays ."</h3>";
            $result.= '<div class = "drapeau">
                        <img    alt = "Drapeau Espagnol"
                                src = "Images/espagne.png"/>
                        </div>';           
                            
                }
        else if ($this->_nomPays == "Angleterre")
        {
            $result = "<h3>". $this->_nomPays ."</h3>";
            $result.=' <div class = "drapeau">
                        <img    alt = "Drapeau Anglais"
                                src = "Images/england.png"/>
                        </div>';
        }
        else 
        {
            $result = "<h3>". $this->_nomPays ."</h3>";
            $result.=' <div class = "drapeau">
                        <img    alt = "Drapeau Italien"
                                src = "Images/italy.png"/>
                        </div>';
                }

        foreach ($this->_equipes as $equipe)
        {
            $result.=$equipe->get_nomEquipe(). "<br>";
        }
        return $result;
    }
    public function __toString()
    {
        $result = $this->_nomPays;
        return $result;
    }

}