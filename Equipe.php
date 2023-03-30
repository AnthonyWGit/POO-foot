<?php 
class Equipe
{
    //Propriétés
    private string $_nomEquipe;
    private int $_dateDeCreation;
    private Pays $_pays; //L'EQUIPE NE BOUGE PAS DE PAYS 
    private array $_signatures = []; // c'est via la Signature qu'on va retrouver les joueurs
    //Initalisation
    public function __construct(string $nomEquipe, int $dateCreation,/*array $joueurs,*/ Pays $pays)
    {
        $this->_nomEquipe = $nomEquipe;
        $this->_dateDeCreation = $dateCreation;
        $this->_pays = $pays;
        $this->_pays->ajouterEquipes($this);
    }
    //___________________________S E T T E R S_________________________________
	public function set_nomEquipe(string $_nomEquipe): self
    {
	    $this->_nomEquipe = $_nomEquipe;
		return $this;
	}
	public function set_dateDeCreation(int $_dateDeCreation): self 
    {
		$this->_dateDeCreation = $_dateDeCreation;
		return $this;
	}    
	public function setPays(Pays $pays): self {
		$this->_pays = $pays;
		return $this;
	}    
//____________________________GETTERS____________________________
    public function get_nomEquipe(): string 
    {
		return $this->_nomEquipe;
	}
	public function get_dateDeCreation(): int
    {
		return $this->_dateDeCreation;
	}

	public function getPays(): Pays 
    {
		return $this->_pays;
	}
    //______________________METHODES_____________________
    public function ajouterSignature(Signature $signature)
    {
        $this->_signatures[] = $signature;
    }

    public function afficherJoueurs()
    {
        $drapeauFR =    "<img alt = 'Drapeau français'
                        src = 'Images/france.png'/ >";
        $drapeauBR =    "<img alt = 'Drapeau brésilien'
                        src = 'Images/bresil.png'/ >";
        $drapeauAR =    "<img alt = 'Drapeau argentin'
                        src = 'Images/argentine.png'/ >";
        $drapeauPR =    "<img alt = 'Drapeau portugais'
                         src = 'Images/le-portugal.png'/ >";

        $result = '<div class = "carteEquipeHeader"><h3>Joueurs du '.$this->_nomEquipe. '</h3>';
        $result.= $this->_pays->get_nomPays() ." - " .$this->_dateDeCreation. "<br></div>";
        foreach ($this->_signatures as $signature)
            {
                $result.='<div class = "descriptionEquipe">';
                $result.= $signature->get_joueur()->get_prenomJoueur(). " ";
                $result.= $signature->get_joueur()->get_nomJoueur()." <br>";
                $result.= "Nationalité : ". $signature->get_joueur()->getNationalite()." <br>";
                $result.= "Date de signature : ".$signature->get_creationSignature();
                if ($signature->get_joueur()->get_nomJoueur() == "Mbappé")
                {
                    $result .= $drapeauFR."</div>";
                }
                else if ($signature->get_joueur()->get_nomJoueur() == "Messi")
                {
                    $result .=$drapeauAR."</div>";
                }
                else if ($signature->get_joueur()->get_nomJoueur() == "Cristiano")
                {
                    $result .=$drapeauPR."</div>";
                }
                else if ($signature->get_joueur()->get_nomJoueur() == "Neymar")
                {
                    $result .=$drapeauBR."</div>";
                }
            } 
        return $result;
    }
}