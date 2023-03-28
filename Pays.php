<?php
class Pays
{
    private string $_nomPays;
    private Equipe $_equipe;

    private function __construct(string $nomPays, Equipe $equipe)
    {
        $this->_nomPays = $nomPays;
        $this->_equipe = $equipe;
    }

	public function get_nomPays(): string
    {
		return $this->_nomPays;
	}

	public function set_nomPays(string $_nomPays): self 
    {
		$this->_nomPays = $_nomPays;
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
}