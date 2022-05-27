<?php 
class Giochi{
    use Prodotti, Quantità;
    protected $colore;
    
    function __construct(String $nome, String $categoria, float $prezzo, String $colore){
        $this->nome=$nome;
        $this->categoria=$categoria;
        $this->prezzo=$prezzo;
        $this->colore=$colore;
        
    }
}
