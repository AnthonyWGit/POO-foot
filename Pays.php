<?php
class Pays
{
    private string $_nomPays;
    private array $_equipes;

    public function __construct(string $nomPays)
    {
        $this->_nomPays = $nomPays;
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
	public function get_equipes(): array 
    {
		return $this->_equipes;
	}
	public function set_equipes(array $_equipes): self 
    {
		$this->_equipes = $_equipes;
		return $this;
	}
}