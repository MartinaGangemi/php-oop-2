<?php 
class Giochi extends Prodotti{
    protected $tipologiaGioco;
    protected $colore;
    function __construct(String $tipologiaProdotto, float $prezzo, String $tipologiaGioco, String $colore){
        parent:: __construct($tipologiaProdotto, $prezzo);
        $this->tipologiaGioco=$tipologiaGioco;
        $this->colore=$colore;
    }
}
