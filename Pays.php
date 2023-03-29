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
        ?>
        <h2>Voici une liste des équipes de football par pays</h2>
        <h3> <?= $this->_nomPays ?> </h3>
        <?php
        $result = "";
        foreach ($this->_equipes as $equipe)
        {
            $result.=$equipe->get_nomEquipe(). "<br>";
        }
        return $result;
    }
}